<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $application_name
 * @property string|null $application_name_name
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ApplicationNameModuleAaa> $applicationNameModuleAaas
 * @property-read int|null $application_name_module_aaas_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ApplicationPath> $applicationPaths
 * @property-read int|null $application_paths_count
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationName query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationName whereApplicationName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationName whereApplicationNameName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationName whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationName whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationName whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationName whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationName whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationName whereUpdatedBy($value)
 */
	class ApplicationName extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $application_name_id
 * @property int|null $module_aaa_id
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\ApplicationName|null $applicationName
 * @property-read \App\Models\ModuleAaa|null $moduleAaa
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationNameModuleAaa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationNameModuleAaa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationNameModuleAaa query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationNameModuleAaa whereApplicationNameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationNameModuleAaa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationNameModuleAaa whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationNameModuleAaa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationNameModuleAaa whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationNameModuleAaa whereModuleAaaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationNameModuleAaa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationNameModuleAaa whereUpdatedBy($value)
 */
	class ApplicationNameModuleAaa extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $application_name_id
 * @property int|null $module_aaa_id
 * @property int|null $module_baa_id
 * @property int|null $module_caa_id
 * @property int|null $module_activity_type_id
 * @property int|null $module_activity_id
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\ApplicationName|null $applicationName
 * @property-read \App\Models\ModuleAaa|null $moduleAaa
 * @property-read \App\Models\ModuleActivity|null $moduleActivity
 * @property-read \App\Models\ModuleActivityType|null $moduleActivityType
 * @property-read \App\Models\ModuleBaa|null $moduleBaa
 * @property-read \App\Models\ModuleCaa|null $moduleCaa
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereApplicationNameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereModuleAaaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereModuleActivityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereModuleActivityTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereModuleBaaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereModuleCaaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ApplicationPath whereUpdatedBy($value)
 */
	class ApplicationPath extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $team_id
 * @property int $user_id
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership query()
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Membership whereUserId($value)
 * @mixin \Eloquent
 */
	class Membership extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $module_aaa
 * @property string|null $module_aaa_name
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ApplicationNameModuleAaa> $applicationNameModuleAaas
 * @property-read int|null $application_name_module_aaas_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ApplicationPath> $applicationPaths
 * @property-read int|null $application_paths_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ModuleAaaModuleBaa> $moduleAaaModuleBaas
 * @property-read int|null $module_aaa_module_baas_count
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaa query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaa whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaa whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaa whereModuleAaa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaa whereModuleAaaName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaa whereUpdatedBy($value)
 */
	class ModuleAaa extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $module_aaa_id
 * @property int|null $module_baa_id
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\ModuleAaa|null $moduleAaa
 * @property-read \App\Models\ModuleBaa|null $moduleBaa
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaaModuleBaa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaaModuleBaa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaaModuleBaa query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaaModuleBaa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaaModuleBaa whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaaModuleBaa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaaModuleBaa whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaaModuleBaa whereModuleAaaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaaModuleBaa whereModuleBaaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaaModuleBaa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleAaaModuleBaa whereUpdatedBy($value)
 */
	class ModuleAaaModuleBaa extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $module_activity
 * @property string|null $module_activity_name
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ApplicationPath> $applicationPaths
 * @property-read int|null $application_paths_count
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivity whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivity whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivity whereModuleActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivity whereModuleActivityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivity whereUpdatedBy($value)
 */
	class ModuleActivity extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $module_activity_type
 * @property string|null $module_activity_type_name
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ApplicationPath> $applicationPaths
 * @property-read int|null $application_paths_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ModuleCaaModuleActivityType> $moduleCaaModuleActivityTypes
 * @property-read int|null $module_caa_module_activity_types_count
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivityType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivityType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivityType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivityType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivityType whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivityType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivityType whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivityType whereModuleActivityType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivityType whereModuleActivityTypeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivityType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleActivityType whereUpdatedBy($value)
 */
	class ModuleActivityType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $module_baa
 * @property string|null $module_baa_name
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ApplicationPath> $applicationPaths
 * @property-read int|null $application_paths_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ModuleAaaModuleBaa> $moduleAaaModuleBaas
 * @property-read int|null $module_aaa_module_baas_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ModuleBaaModuleCaa> $moduleBaaModuleCaas
 * @property-read int|null $module_baa_module_caas_count
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaa query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaa whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaa whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaa whereModuleBaa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaa whereModuleBaaName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaa whereUpdatedBy($value)
 */
	class ModuleBaa extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $module_baa_id
 * @property int|null $module_caa_id
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\ModuleBaa|null $moduleBaa
 * @property-read \App\Models\ModuleCaa|null $moduleCaa
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaaModuleCaa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaaModuleCaa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaaModuleCaa query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaaModuleCaa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaaModuleCaa whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaaModuleCaa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaaModuleCaa whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaaModuleCaa whereModuleBaaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaaModuleCaa whereModuleCaaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaaModuleCaa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleBaaModuleCaa whereUpdatedBy($value)
 */
	class ModuleBaaModuleCaa extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $module_caa
 * @property string|null $module_caa_name
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ApplicationPath> $applicationPaths
 * @property-read int|null $application_paths_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ModuleBaaModuleCaa> $moduleBaaModuleCaas
 * @property-read int|null $module_baa_module_caas_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ModuleCaaModuleActivityType> $moduleCaaModuleActivityTypes
 * @property-read int|null $module_caa_module_activity_types_count
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaa query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaa whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaa whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaa whereModuleCaa($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaa whereModuleCaaName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaa whereUpdatedBy($value)
 */
	class ModuleCaa extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $module_caa_id
 * @property int|null $module_activity_type_id
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\ModuleActivityType|null $moduleActivityType
 * @property-read \App\Models\ModuleCaa|null $moduleCaa
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaaModuleActivityType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaaModuleActivityType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaaModuleActivityType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaaModuleActivityType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaaModuleActivityType whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaaModuleActivityType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaaModuleActivityType whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaaModuleActivityType whereModuleActivityTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaaModuleActivityType whereModuleCaaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaaModuleActivityType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ModuleCaaModuleActivityType whereUpdatedBy($value)
 */
	class ModuleCaaModuleActivityType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $panel_role
 * @property int|null $is_active
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PanelRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PanelRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PanelRole query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PanelRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PanelRole whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PanelRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PanelRole whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PanelRole wherePanelRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PanelRole whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PanelRole whereUpdatedBy($value)
 */
	class PanelRole extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property bool $personal_team
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TeamInvitation> $teamInvitations
 * @property-read int|null $team_invitations_count
 * @property-read \App\Models\Membership $membership
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\TeamFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team wherePersonalTeam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUserId($value)
 * @mixin \Eloquent
 */
	class Team extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $team_id
 * @property string $email
 * @property string|null $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Team $team
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamInvitation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class TeamInvitation extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $panel
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Team|null $currentTeam
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Team> $ownedTeams
 * @property-read int|null $owned_teams_count
 * @property-read string $profile_photo_url
 * @property-read \App\Models\Membership $membership
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Team> $teams
 * @property-read int|null $teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePanel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property int|null $is_active
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \Kenepa\ResourceLock\Models\ResourceLock|null $resourceLock
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property int|null $panel_role_id
 * @property-read \App\Models\PanelRole|null $panelRole
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePanelRoleId($value)
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser {}
}

