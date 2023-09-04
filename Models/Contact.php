<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * Modules\Notify\Models\Contact.
 *
 * @property int                             $id
 * @property string                          $model_type
 * @property string                          $model_id
 * @property string|null                     $contact_type
 * @property string|null                     $value
 * @property string|null                     $user_id
 * @property \Illuminate\Support\Carbon|null $verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property string|null                     $token
 *
 * @method static \Modules\Notify\Database\Factories\ContactFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereContactType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereVerifiedAt($value)
 *
 * @mixin IdeHelperContact
 *
 * @property string|null $email
 * @property string|null $mobile_phone
 * @property string|null $survey_pdf_id
 * @property string|null $attribute_1
 * @property string|null $attribute_2
 * @property string|null $attribute_3
 * @property string|null $attribute_4
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $sms_sent_at
 * @property int|null    $sms_count
 * @property string|null $mail_sent_at
 * @property int|null    $mail_count
 * @property string|null $attribute_5
 * @property string|null $attribute_6
 * @property string|null $attribute_7
 * @property string|null $attribute_8
 * @property string|null $attribute_9
 * @property string|null $attribute_10
 * @property string|null $attribute_11
 * @property string|null $attribute_12
 * @property string|null $attribute_13
 * @property string|null $attribute_14
 * @property string|null $language
 * @property string|null $usesleft
 * @property string|null $sms_status_code
 * @property string|null $sms_status_txt
 * @property int|null    $duplicate_count
 * @property int|null    $order_column
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereDuplicateCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMailCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMailSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMobilePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsStatusCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsStatusTxt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSurveyPdfId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUsesleft($value)
 *
 * @mixin \Eloquent
 */
class Contact extends BaseModel
{
    /**
     * Undocumented variable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'model_id', 'model_type', 'contact_type', 'value',
        'verified_at', 'updated_at', 'created_at',
        'updated_by', 'created_by', 'user_id', 'token',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'date_start' => 'datetime:Y-m-d\TH:i',
        // 'date_end' => 'datetime:Y-m-d\TH:i',
        'model_id' => 'string',
        'user_id' => 'string',
    ];
=======
class Contact extends BaseModel {
<<<<<<< HEAD
    protected $fillable = ['model_id', 'model_type', 'contact_type', 'value', 'verified_at', 'updated_at', 'created_at', 'updated_by', 'created_by'];
>>>>>>> bd28543 (up)
=======
    protected $fillable = ['model_id', 'model_type', 'contact_type', 'value', 'verified_at', 'updated_at', 'created_at', 'updated_by', 'created_by', 'user_id', 'token'];
>>>>>>> 32428ef (.)
=======
=======
>>>>>>> fe06862 (.)
/**
 * Modules\Notify\Models\Contact.
 *
 * @property int                             $id
 * @property string                          $model_type
 * @property string                          $model_id
 * @property string|null                     $contact_type
 * @property string|null                     $value
 * @property string|null                     $user_id
 * @property \Illuminate\Support\Carbon|null $verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property string|null                     $token
 *
 * @method static \Modules\Notify\Database\Factories\ContactFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereContactType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereVerifiedAt($value)
 *
 * @mixin IdeHelperContact
 *
 * @property string|null $email
 * @property string|null $mobile_phone
 * @property string|null $survey_pdf_id
 * @property string|null $attribute_1
 * @property string|null $attribute_2
 * @property string|null $attribute_3
 * @property string|null $attribute_4
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $sms_sent_at
 * @property int|null    $sms_count
 * @property string|null $mail_sent_at
 * @property int|null    $mail_count
 * @property string|null $attribute_5
 * @property string|null $attribute_6
 * @property string|null $attribute_7
 * @property string|null $attribute_8
 * @property string|null $attribute_9
 * @property string|null $attribute_10
 * @property string|null $attribute_11
 * @property string|null $attribute_12
 * @property string|null $attribute_13
 * @property string|null $attribute_14
 * @property string|null $language
 * @property string|null $usesleft
 * @property string|null $sms_status_code
 * @property string|null $sms_status_txt
 * @property int|null    $duplicate_count
 * @property int|null    $order_column
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAttribute9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereDuplicateCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMailCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMailSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMobilePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsStatusCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSmsStatusTxt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSurveyPdfId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUsesleft($value)
 *
 * @mixin \Eloquent
 */
class Contact extends BaseModel
{
    /**
     * Undocumented variable.
     *
     * @var array<string>
     */
=======
/**
 * Modules\Notify\Models\Contact.
 *
 * @property string                          $token
 * @property string                          $model_type
 * @property string                          $model_id
 * @property string                          $user_id
 * @property string                          $contact_type
 * @property \Illuminate\Support\Carbon|null $verified_at
 * @property mixed                           $value
 * @property int                             $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 *
 * @method static \Modules\Notify\Database\Factories\ContactFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereContactType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact     whereVerifiedAt($value)
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
class Contact extends BaseModel {
>>>>>>> 0799e3a (up)
=======
class Contact extends BaseModel
{
    /**
     * Undocumented variable.
     *
     * @var array<string>
     */
>>>>>>> 3d1ec9b (up)
    protected $fillable = [
        'model_id', 'model_type', 'contact_type', 'value',
        'verified_at', 'updated_at', 'created_at',
        'updated_by', 'created_by', 'user_id', 'token',
    ];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 91728dd (up)
=======
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> 3d1ec9b (up)

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'date_start' => 'datetime:Y-m-d\TH:i',
        // 'date_end' => 'datetime:Y-m-d\TH:i',
        'model_id' => 'string',
        'user_id' => 'string',
    ];
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e73574f (up)
=======
>>>>>>> fe06862 (.)
=======
class Contact extends BaseModel {
<<<<<<< HEAD
    protected $fillable = ['model_id', 'model_type', 'contact_type', 'value', 'verified_at', 'updated_at', 'created_at', 'updated_by', 'created_by'];
>>>>>>> 202f1e7 (up)
=======
    protected $fillable = ['model_id', 'model_type', 'contact_type', 'value', 'verified_at', 'updated_at', 'created_at', 'updated_by', 'created_by', 'user_id', 'token'];
>>>>>>> dacc817 (.)
=======
>>>>>>> 0799e3a (up)
=======
>>>>>>> 3d1ec9b (up)
}
