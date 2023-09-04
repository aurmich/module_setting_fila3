<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Eloquent;
use Illuminate\Notifications\DatabaseNotification;

/**
 * Modules\Notify\Models\Notification.
 *
 * @property string                                        $id
 * @property string                                        $type
 * @property string                                        $notifiable_type
 * @property int                                           $notifiable_id
 * @property array                                         $data
 * @property \Illuminate\Support\Carbon|null               $read_at
 * @property \Illuminate\Support\Carbon|null               $created_at
 * @property string|null                                   $created_by
 * @property \Illuminate\Support\Carbon|null               $updated_at
 * @property string|null                                   $updated_by
 * @property \Illuminate\Database\Eloquent\Model|Eloquent $notifiable
 *
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    query()
 * @method static Builder|DatabaseNotification                                          read()
 * @method static Builder|DatabaseNotification                                          unread()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereNotifiableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereNotifiableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereUpdatedBy($value)
 *
 * @mixin IdeHelperNotification
 *
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 *
 * @mixin \Eloquent
 */
class Notification extends DatabaseNotification
{
=======

class Notification extends BaseModel {
    protected $fillable=[''];

    
>>>>>>> 40ebae8 (up)
=======
class Notification extends BaseModel {
    protected $fillable = [''];
>>>>>>> bc60653 (up)
=======
class Notification extends BaseModel {
    protected $fillable = [''];
>>>>>>> 602db11 (up)
=======
=======
>>>>>>> fe06862 (.)
=======
use Eloquent;
>>>>>>> b735fbf (.)
use Illuminate\Notifications\DatabaseNotification;

/**
 * Modules\Notify\Models\Notification.
 *
 * @property string                                        $id
 * @property string                                        $type
 * @property string                                        $notifiable_type
 * @property int                                           $notifiable_id
 * @property array                                         $data
 * @property \Illuminate\Support\Carbon|null               $read_at
 * @property \Illuminate\Support\Carbon|null               $created_at
 * @property string|null                                   $created_by
 * @property \Illuminate\Support\Carbon|null               $updated_at
 * @property string|null                                   $updated_by
 * @property \Illuminate\Database\Eloquent\Model|Eloquent $notifiable
 *
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    query()
 * @method static Builder|DatabaseNotification                                          read()
 * @method static Builder|DatabaseNotification                                          unread()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereNotifiableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereNotifiableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification                    whereUpdatedBy($value)
 *
 * @mixin IdeHelperNotification
 *
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
class Notification extends DatabaseNotification {
    
<<<<<<< HEAD
>>>>>>> ace9eb3 (up)
=======
>>>>>>> fe06862 (.)
=======
class Notification extends DatabaseNotification
{
>>>>>>> b735fbf (.)
=======

class Notification extends BaseModel {
    protected $fillable=[''];

    
>>>>>>> 82d1f8c (up)
=======
class Notification extends BaseModel {
    protected $fillable = [''];
>>>>>>> c3e3fc0 (up)
=======
class Notification extends BaseModel {
    protected $fillable = [''];
>>>>>>> b3b016d (up)
=======
=======
>>>>>>> a758bd5 (.)
use Illuminate\Notifications\DatabaseNotification;

/**
 * Modules\Notify\Models\Notification
 *
 * @property string $id
 * @property string $type
 * @property string $notifiable_type
 * @property int $notifiable_id
 * @property array $data
 * @property \Illuminate\Support\Carbon|null $read_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $notifiable
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static Builder|DatabaseNotification read()
 * @method static Builder|DatabaseNotification unread()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Notification extends DatabaseNotification {
    
<<<<<<< HEAD
>>>>>>> 8229f91 (up)
=======
>>>>>>> a758bd5 (.)
}
