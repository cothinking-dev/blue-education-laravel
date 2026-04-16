<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum PartnerCategory: string implements HasLabel
{
    case University = 'university';
    case TafeTraining = 'tafe_training';
    case EnglishLanguage = 'english_language';
    case OvereastCollege = 'overeast_college';
    case OtherCollege = 'other_college';
    case AngliSchool = 'angli_school';
    case Credential = 'credential';
    case InternationalOffice = 'international_office';

    public function getLabel(): string
    {
        return match ($this) {
            self::University => 'Universities',
            self::TafeTraining => 'TAFE & Training Providers',
            self::EnglishLanguage => 'English Language Schools',
            self::OvereastCollege => 'Overeast Colleges',
            self::OtherCollege => 'Other Colleges',
            self::AngliSchool => 'AngliSchools',
            self::Credential => 'Professional Credentials',
            self::InternationalOffice => 'International Offices',
        };
    }
}
