<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php
<<<<<<< HEAD
<<<<<<< HEAD
/**
<<<<<<< HEAD
 * @see https://smsvi-docs.web.app/docs/restful/send-batch/
 */
=======
<?php
>>>>>>> 42aa20e (.)
=======
<<<<<<< HEAD
 * @link https://smsvi-docs.web.app/docs/restful/send-batch/
 */
<<<<<<< HEAD
>>>>>>> 468f0a0 (.)
=======
=======
>>>>>>> 42aa20e (.)
>>>>>>> 5ae214b (.)
=======
/**
 * @link https://smsvi-docs.web.app/docs/restful/send-batch/
 */
>>>>>>> 468f0a0 (.)
>>>>>>> 752b6b1 (.)

declare(strict_types=1);

namespace Modules\Notify\Services\SmsEngines;

<<<<<<< HEAD
<<<<<<< HEAD
use GuzzleHttp\Client;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;

// ---------CSS------------
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Xot\Traits\Getter;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Modules\Xot\Services\FileService;
use Modules\Xot\Services\StubService;
use Modules\Xot\Services\PanelService;
use Modules\Xot\Services\RouteService;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Services\ArtisanService;
=======
>>>>>>> 6c92430 (.)
=======
use Illuminate\Support\Str;
>>>>>>> 468f0a0 (.)
use GuzzleHttp\Exception\ClientException;
=======
use Exception;
=======
>>>>>>> 6c92430 (.)
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use GuzzleHttp\Exception\ClientException;
<<<<<<< HEAD
use Modules\Tenant\Services\TenantService;
use Illuminate\Contracts\Support\Renderable;
>>>>>>> 42aa20e (.)
=======
>>>>>>> 6c92430 (.)

//---------CSS------------
>>>>>>> 42aa20e (.)

/**
 * Class SmsService.
 */
<<<<<<< HEAD
class NetfunEngine
{
    private static ?self $instance = null;

=======
class NetfunEngine {
    private static ?self $instance = null;
>>>>>>> 42aa20e (.)
    public ?string $from;
    public string $to;
    public string $driver;
    public ?string $body;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public array $vars = [];

=======
>>>>>>> 5ae214b (.)
=======
>>>>>>> c0db99d (.)
    public string $send_method = 'batch';

    public function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self;
=======
    public string $send_method='batch';
=======
    public string $send_method = 'batch';
>>>>>>> 6c92430 (.)

    public function __construct() {
=======
    public string $send_method='batch';

    public function __construct(){
        
>>>>>>> 42aa20e (.)
=======
    public string $send_method = 'batch';

    public function __construct() {
>>>>>>> 6c92430 (.)
    }

    public static function getInstance(): self {
        if (null === self::$instance) {
            self::$instance = new self();
>>>>>>> 42aa20e (.)
        }

        return self::$instance;
    }

<<<<<<< HEAD
    public static function make(): self
    {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self
    {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }

        return $this;
    }

    public function getVars(): array
    {
        return $this->vars;
    }

    public function send(): self
    {
        switch ($this->send_method) {
            case 'batch': return $this->sendBatch();
        }

        return $this->sendNormal();
    }

    public function sendBatch(): self
    {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        // dddx([ord($this->body[0]), $this->body]);

        $this->to = $this->to . '';
        if (Str::startsWith($this->to, '00')) {
            $this->to = '+39' . substr($this->to, 2);
        }

        if (! Str::startsWith($this->to, '+')) {
            $this->to = '+39' . $this->to;
        }

        $body = [
            'api_token' => $token,
            // "gateway"=> 99,
            'sender' => $this->from,
            'text_template' => $this->body . '  ' . rand(1, 100),
            /*
            'delivery_callback' => 'https://www.google.com?code={{code}}',
            'default_placeholders' => [
                'code' => '0000',
            ],
            */
            'async' => true,
            // 'max_sms_length' => 1,
            'utf8_enabled' => true,
            'destinations' => [
                [
                    'number' => $this->to,
                    /*
                    'placeholders' => [
                        'fullName' => 'Santi',
                        'body' => 'Ciao, hai vinto il premio',
                        'code' => '1234',
                    ],
                    */
                ],
            ],
        ];

        // dddx($body);

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            throw new Exception($e->getMessage() . '[' . __LINE__ . '][' . __FILE__ . ']');
        }
        /*
        echo '<hr/>';
        echo '<pre>to: '.$this->to.'</pre>';
        echo '<pre>body: '.$this->body.'</pre>';
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';
        */

        $this->vars['status_code'] = $response->getStatusCode();
        $this->vars['status_txt'] = $response->getBody()->getContents();

        return $this;
    }

    public function sendNormal(): self
    {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        $body = [
            'api_token' => $token,
            'text' => $this->body,
            'numbers' => $this->to,
        ];

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            throw new Exception($e->getMessage() . '[' . __LINE__ . '][' . __FILE__ . ']');
=======
    public static function make(): self {
        return static::getInstance();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setLocalVars(array $vars): self {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }

        return $this;
    }

    public function send(): self {
        switch ($this->send_method) {
            case 'batch': return $this->sendBatch();
        }

        return $this->sendNormal();
    }

    public function sendBatch(): self {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        //dddx([ord($this->body[0]), $this->body]);

        $this->to=$this->to.'';
        if(Str::startsWith($this->to,'00')){
            $this->to='+39'.substr($this->to,2);
        }

        if(!Str::startsWith($this->to,'+')){
            $this->to='+39'.$this->to;
        }

<<<<<<< HEAD
        $body = [
            'api_token' => $token,
            //"gateway"=> 99,
            'sender' => $this->from,
            'text_template' => $this->body.'  '.rand(1,100),
            /*
            'delivery_callback' => 'https://www.google.com?code={{code}}',
            'default_placeholders' => [
                'code' => '0000',
            ],
            */
            'async' => true,
            //'max_sms_length' => 1,
            'utf8_enabled' => true,
            'destinations' => [
                [
                    'number' => $this->to,
                    /*
                    'placeholders' => [
                        'fullName' => 'Santi',
                        'body' => 'Ciao, hai vinto il premio',
                        'code' => '1234',
                    ],
                    */
                ],
            ],
        ];

        //dddx($body);

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            dddx($e);
>>>>>>> 42aa20e (.)
        }
        echo '<hr/>';
        echo '<pre>to: '.$this->to.'</pre>';
        echo '<pre>body: '.$this->body.'</pre>';
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';

        return $this;
    }
<<<<<<< HEAD
}
=======
=======
>>>>>>> 3a0e0a5 (up)
=======
>>>>>>> 8be0eaa (up)
<?php
/**
 * @see https://smsvi-docs.web.app/docs/restful/send-batch/
 */

declare(strict_types=1);

namespace Modules\Notify\Services\SmsEngines;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;

// ---------CSS------------

/**
 * Class SmsService.
 */
class NetfunEngine {
    private static ?self $instance = null;
    public ?string $from;
    public string $to;
    public string $driver;
    public ?string $body;

    public array $vars = [];

    public string $send_method = 'batch';

    public function __construct() {
    }

    public static function getInstance(): self {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function make(): self {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }

        return $this;
    }

    public function getVars() {
        return $this->vars;
    }

    public function send(): self {
        switch ($this->send_method) {
            case 'batch': return $this->sendBatch();
        }

        return $this->sendNormal();
    }

    public function sendBatch(): self {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        // dddx([ord($this->body[0]), $this->body]);

        $this->to = $this->to.'';
        if (Str::startsWith($this->to, '00')) {
            $this->to = '+39'.substr($this->to, 2);
        }

        if (! Str::startsWith($this->to, '+')) {
            $this->to = '+39'.$this->to;
        }

        $body = [
            'api_token' => $token,
            // "gateway"=> 99,
            'sender' => $this->from,
            'text_template' => $this->body.'  '.rand(1, 100),
            /*
            'delivery_callback' => 'https://www.google.com?code={{code}}',
            'default_placeholders' => [
                'code' => '0000',
            ],
            */
            'async' => true,
            // 'max_sms_length' => 1,
            'utf8_enabled' => true,
            'destinations' => [
                [
                    'number' => $this->to,
                    /*
                    'placeholders' => [
                        'fullName' => 'Santi',
                        'body' => 'Ciao, hai vinto il premio',
                        'code' => '1234',
                    ],
                    */
                ],
            ],
        ];

        // dddx($body);

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            throw new Exception($e->getMessage().'['.__LINE__.']['.__FILE__.']');
        }
        /*
        echo '<hr/>';
        echo '<pre>to: '.$this->to.'</pre>';
        echo '<pre>body: '.$this->body.'</pre>';
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';
        */

        $this->vars['status_code'] = $response->getStatusCode();
        $this->vars['status_txt'] = $response->getBody()->getContents();

        return $this;
    }

    public function sendNormal(): self {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        $body = [
            'api_token' => $token,
            'text' => $this->body,
            'numbers' => $this->to,
        ];

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            throw new Exception($e->getMessage().'['.__LINE__.']['.__FILE__.']');
        }
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';

        return $this;
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9349baf (.)
=======
>>>>>>> 3a0e0a5 (up)
=======
<?php
/**
 * @see https://smsvi-docs.web.app/docs/restful/send-batch/
 */

declare(strict_types=1);

namespace Modules\Notify\Services\SmsEngines;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;

// ---------CSS------------

/**
 * Class SmsService.
 */
class NetfunEngine {
    private static ?self $instance = null;
    public ?string $from;
    public string $to;
    public string $driver;
    public ?string $body;

    public string $send_method = 'batch';

    public function __construct() {
    }

    public static function getInstance(): self {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function make(): self {
        return static::getInstance();
    }

    public function setLocalVars(array $vars): self {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
        }

        return $this;
    }

    public function send(): self {
        switch ($this->send_method) {
            case 'batch': return $this->sendBatch();
        }

        return $this->sendNormal();
    }

    public function sendBatch(): self {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        // dddx([ord($this->body[0]), $this->body]);

        $this->to = $this->to.'';
        if (Str::startsWith($this->to, '00')) {
            $this->to = '+39'.substr($this->to, 2);
        }

        if (! Str::startsWith($this->to, '+')) {
            $this->to = '+39'.$this->to;
        }

        $body = [
            'api_token' => $token,
            // "gateway"=> 99,
            'sender' => $this->from,
            'text_template' => $this->body.'  '.rand(1, 100),
            /*
            'delivery_callback' => 'https://www.google.com?code={{code}}',
            'default_placeholders' => [
                'code' => '0000',
            ],
            */
            'async' => true,
            // 'max_sms_length' => 1,
            'utf8_enabled' => true,
            'destinations' => [
                [
                    'number' => $this->to,
                    /*
                    'placeholders' => [
                        'fullName' => 'Santi',
                        'body' => 'Ciao, hai vinto il premio',
                        'code' => '1234',
                    ],
                    */
                ],
            ],
        ];

        // dddx($body);

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            dddx($e);
        }
        echo '<hr/>';
        echo '<pre>to: '.$this->to.'</pre>';
        echo '<pre>body: '.$this->body.'</pre>';
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';
=======
    public function setLocalVars(array $vars):self{
        foreach($vars as $k=>$v){
            $this->{$k}=$v;
=======
    public function setLocalVars(array $vars): self {
        foreach ($vars as $k => $v) {
            $this->{$k} = $v;
>>>>>>> 6c92430 (.)
        }

        return $this;
    }

    public function send(): self {
        switch ($this->send_method) {
            case 'batch': return $this->sendBatch();
        }

        return $this->sendNormal();
    }

    public function sendBatch(): self {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        //dddx([ord($this->body[0]), $this->body]);

=======
>>>>>>> 468f0a0 (.)
        $body = [
            'api_token' => $token,
            //"gateway"=> 99,
            'sender' => $this->from,
            'text_template' => $this->body.'  '.rand(1,100),
            /*
            'delivery_callback' => 'https://www.google.com?code={{code}}',
            'default_placeholders' => [
                'code' => '0000',
            ],
            */
            'async' => true,
            //'max_sms_length' => 1,
            'utf8_enabled' => true,
            'destinations' => [
                [
                    'number' => $this->to,
                    /*
                    'placeholders' => [
                        'fullName' => 'Santi',
                        'body' => 'Ciao, hai vinto il premio',
                        'code' => '1234',
                    ],
                    */
                ],
            ],
        ];

        //dddx($body);

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            dddx($e);
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        echo '<pre>' . var_export($response->getStatusCode(), true) . '</pre>';
        echo '<pre>' . var_export($response->getBody()->getContents(), true) . '</pre>';
>>>>>>> 42aa20e (.)
=======
=======

>>>>>>> a43b060 (.)
=======
        echo '<hr/>';
<<<<<<< HEAD
        echo '<pre>'.$this->to.'</pre>';
        echo '<pre>'.$this->body.'</pre>';
>>>>>>> 683ae82 (.)
=======
        echo '<pre>to: '.$this->to.'</pre>';
        echo '<pre>body: '.$this->body.'</pre>';
>>>>>>> 468f0a0 (.)
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';
>>>>>>> 6c92430 (.)

        return $this;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function sendNormal(): self {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        $body = [
            'api_token' => $token,
            'text' => $this->body,
            'numbers' => $this->to,
        ];

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            dddx($e);
        }
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';

        return $this;
    }
}
<<<<<<< HEAD
>>>>>>> 89120cb (rebase)
=======
>>>>>>> 8be0eaa (up)
=======

    public function sendNormal(): self {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms.json';
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        $body = [
            'api_token' => $token,
            'text' => $this->body,
            'numbers' => $this->to,
        ];

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            dddx($e);
        }
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';

        return $this;
    }
}
<<<<<<< HEAD
>>>>>>> 42aa20e (.)
=======
>>>>>>> 6c92430 (.)
=======
=======

    public function sendNormal():self{
        $endpoint='https://v2.smsviainternet.it/api/rest/v1/sms.json';
        $headers=[
=======
    public function sendNormal(): self {
        $endpoint = 'https://v2.smsviainternet.it/api/rest/v1/sms.json';
        $headers = [
>>>>>>> 6c92430 (.)
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];
        $token = env('NETFUN_TOKEN');

        $body = [
            'api_token' => $token,
            'text' => $this->body,
            'numbers' => $this->to,
        ];

        $client = new Client($headers);
        try {
            $response = $client->post($endpoint, ['json' => $body]);
        } catch (ClientException $e) {
            dddx($e);
        }
        echo '<pre>'.var_export($response->getStatusCode(), true).'</pre>';
        echo '<pre>'.var_export($response->getBody()->getContents(), true).'</pre>';

        return $this;
    }
}
<<<<<<< HEAD
>>>>>>> 42aa20e (.)
<<<<<<< HEAD
>>>>>>> 5ae214b (.)
=======
=======
>>>>>>> 6c92430 (.)
>>>>>>> c0db99d (.)
