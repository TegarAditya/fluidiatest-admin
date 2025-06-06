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
 * @property int $user_id
 * @property int $question_pack_id
 * @property string $attempt_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\QuestionPack $exam
 * @property-read mixed $total_score
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ExamResponse> $responses
 * @property-read int|null $responses_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamAttempt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamAttempt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamAttempt query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamAttempt whereAttemptId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamAttempt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamAttempt whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamAttempt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamAttempt whereQuestionPackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamAttempt whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamAttempt whereUserId($value)
 */
	class ExamAttempt extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $exam_attempt_id
 * @property int $question_bank_id
 * @property int|null $question_option_id
 * @property int|null $reason_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ExamAttempt $attempt
 * @property-read mixed $score
 * @property-read \App\Models\QuestionOption|null $option
 * @property-read \App\Models\QuestionBank|null $question
 * @property-read \App\Models\Reason|null $reason
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamResponse query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamResponse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamResponse whereExamAttemptId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamResponse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamResponse whereQuestionBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamResponse whereQuestionOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamResponse whereReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExamResponse whereUpdatedAt($value)
 */
	class ExamResponse extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $learning_goal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningGoal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningGoal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningGoal query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningGoal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningGoal whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningGoal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningGoal whereLearningGoal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningGoal whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningGoal whereUpdatedAt($value)
 */
	class LearningGoal extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $attachment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningMaterial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningMaterial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningMaterial query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningMaterial whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningMaterial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningMaterial whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningMaterial whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningMaterial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningMaterial whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningMaterial whereUpdatedAt($value)
 */
	class LearningMaterial extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $learning_outcome
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningOutcome newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningOutcome newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningOutcome query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningOutcome whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningOutcome whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningOutcome whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningOutcome whereLearningOutcome($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LearningOutcome whereUpdatedAt($value)
 */
	class LearningOutcome extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $code
 * @property string $question
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\QuestionFeedback> $feedbacks
 * @property-read int|null $feedbacks_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\QuestionOption> $options
 * @property-read int|null $options_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\QuestionPack> $packs
 * @property-read int|null $packs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Reason> $reasons
 * @property-read int|null $reasons_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionBank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionBank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionBank query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionBank whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionBank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionBank whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionBank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionBank whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionBank whereUpdatedAt($value)
 */
	class QuestionBank extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $question_bank_id
 * @property int $score
 * @property string $feedback
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\QuestionBank|null $question
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionFeedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionFeedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionFeedback query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionFeedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionFeedback whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionFeedback whereFeedback($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionFeedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionFeedback whereQuestionBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionFeedback whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionFeedback whereUpdatedAt($value)
 */
	class QuestionFeedback extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $question_bank_id
 * @property string $label
 * @property string $option
 * @property int $is_correct
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\QuestionBank|null $question
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionOption query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionOption whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionOption whereIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionOption whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionOption whereOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionOption whereQuestionBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionOption whereUpdatedAt($value)
 */
	class QuestionOption extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $public_id
 * @property string $code
 * @property string $description
 * @property int $is_active
 * @property int $is_multi_tier
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $type
 * @property string|null $duration
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ExamAttempt> $examAttempts
 * @property-read int|null $exam_attempts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\QuestionPackQuestionBank> $questionPackQuestionBank
 * @property-read int|null $question_pack_question_bank_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\QuestionBank> $questions
 * @property-read int|null $questions_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack whereIsMultiTier($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack wherePublicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPack whereUpdatedAt($value)
 */
	class QuestionPack extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $question_pack_id
 * @property int $question_bank_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\QuestionBank|null $question
 * @property-read \App\Models\QuestionPack $questionPack
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPackQuestionBank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPackQuestionBank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPackQuestionBank query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPackQuestionBank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPackQuestionBank whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPackQuestionBank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPackQuestionBank whereQuestionBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPackQuestionBank whereQuestionPackId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuestionPackQuestionBank whereUpdatedAt($value)
 */
	class QuestionPackQuestionBank extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $question_bank_id
 * @property string $label
 * @property string $reason
 * @property int $is_correct
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\QuestionBank|null $question
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Reason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Reason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Reason query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Reason whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Reason whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Reason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Reason whereIsCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Reason whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Reason whereQuestionBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Reason whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Reason whereUpdatedAt($value)
 */
	class Reason extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|School newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|School newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|School query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|School whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|School whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|School whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|School whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|School whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|School whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|School whereUpdatedAt($value)
 */
	class School extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $public_id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $theme
 * @property string|null $theme_color
 * @property int|null $school_id
 * @property-read mixed $breezy_session
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Jeffgreco13\FilamentBreezy\Models\BreezySession> $breezySessions
 * @property-read int|null $breezy_sessions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ExamAttempt> $examAttempts
 * @property-read int|null $exam_attempts_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \App\Models\School|null $school
 * @property-read mixed $two_factor_recovery_codes
 * @property-read mixed $two_factor_secret
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePublicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereThemeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser {}
}

