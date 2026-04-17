<?php

namespace Database\Seeders;

use App\Enums\PartnerCategory;
use App\Models\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        if (Partner::count() > 0) {
            return;
        }

        $this->seedUniversities();
        $this->seedTafePartners();
        $this->seedCredentials();
        $this->seedInternationalOffices();
    }

    private function seedUniversities(): void
    {
        $universities = [
            ['name' => 'University of Western Australia', 'logo' => 'images/partners/uwa-logo.svg'],
            ['name' => 'Curtin University', 'logo' => 'images/partners/curtin-logo.webp'],
            ['name' => 'Murdoch University', 'logo' => 'images/partners/murdoch-logo.svg'],
            ['name' => 'Edith Cowan University', 'logo' => 'images/partners/ecu-logo.png'],
            ['name' => 'Notre Dame Australia', 'logo' => 'images/partners/notre-dame-logo.webp'],
            ['name' => 'Southern Cross University', 'logo' => 'images/partners/scu-logo.png'],
        ];

        foreach ($universities as $i => $data) {
            $storagePath = $this->copyToStorage($data['logo']);
            Partner::create([
                'name' => $data['name'],
                'logo' => $storagePath,
                'category' => PartnerCategory::University,
                'is_active' => true,
                'sort_order' => $i,
            ]);
        }
    }

    private function seedTafePartners(): void
    {
        $partners = [
            ['name' => 'TAFE Queensland', 'logo' => 'images/partners/tafe-qld-logo.png'],
            ['name' => 'TAFE NSW', 'logo' => 'images/partners/tafe-nsw-logo.svg'],
            ['name' => 'TAFE SA', 'logo' => 'images/partners/tafe-sa-logo.png'],
            ['name' => 'Holmesglen Institute', 'logo' => 'images/partners/holmesglen-logo.svg'],
            ['name' => 'Box Hill Institute', 'logo' => 'images/partners/boxhill-logo.svg'],
            ['name' => 'Melbourne Polytechnic', 'logo' => 'images/partners/melbourne-poly-logo.png'],
        ];

        foreach ($partners as $i => $data) {
            $storagePath = $this->copyToStorage($data['logo']);
            Partner::create([
                'name' => $data['name'],
                'logo' => $storagePath,
                'category' => PartnerCategory::TafeTraining,
                'is_active' => true,
                'sort_order' => $i,
            ]);
        }
    }

    private function seedCredentials(): void
    {
        $credentials = [
            ['name' => 'QEAC Certified', 'logo' => 'images/credentials/qeac.svg', 'description' => 'Qualified Education Agent Counsellor — the premier professional qualification for education agents in Australia. QEAC S165.'],
            ['name' => 'Migration Alliance', 'logo' => 'images/credentials/migration-alliance.svg', 'description' => "Australia's largest professional body for migration agents. Access to current industry knowledge, professional development, and peer networks."],
            ['name' => 'Migration Institute of Australia', 'logo' => 'images/credentials/mia.svg', 'description' => 'The MIA represents the highest professional and ethical standards in migration advice and services.'],
            ['name' => 'Australian Bar Association', 'logo' => 'images/credentials/australian-bar-association.svg', 'description' => 'Access to legal expertise relevant to education and migration matters.'],
        ];

        foreach ($credentials as $i => $data) {
            $storagePath = $this->copyToStorage($data['logo']);
            Partner::create([
                'name' => $data['name'],
                'logo' => $storagePath,
                'category' => PartnerCategory::Credential,
                'description' => $data['description'],
                'is_active' => true,
                'sort_order' => $i,
            ]);
        }
    }

    private function seedInternationalOffices(): void
    {
        $offices = [
            ['name' => 'Perth, WA (HQ)', 'representative' => 'Glen + core team', 'coverage' => 'Australia-wide'],
            ['name' => 'Japan', 'representative' => 'Minami Sakamoto', 'coverage' => 'Northeast Asia'],
            ['name' => 'New Zealand', 'representative' => 'Sherene Chan', 'coverage' => 'Oceania'],
            ['name' => 'Zambia', 'representative' => 'Elijah Chongo, Priscilla Mwansa', 'coverage' => 'Southern Africa'],
            ['name' => 'Indonesia', 'representative' => 'Hana Hursepuny', 'coverage' => 'Southeast Asia'],
            ['name' => 'Malaysia', 'representative' => 'Elaine Ho, Monica Low', 'coverage' => 'Southeast Asia'],
            ['name' => 'Ghana', 'representative' => 'Nino Sekyere-Boakye', 'coverage' => 'West Africa, Africa-wide'],
        ];

        foreach ($offices as $i => $data) {
            Partner::create([
                ...$data,
                'category' => PartnerCategory::InternationalOffice,
                'is_active' => true,
                'sort_order' => $i,
            ]);
        }
    }

    private function copyToStorage(string $publicPath): ?string
    {
        $sourcePath = public_path($publicPath);

        if (! File::exists($sourcePath)) {
            return null;
        }

        $storagePath = 'images/partners/'.basename($publicPath);
        Storage::put($storagePath, File::get($sourcePath), 'public');

        return $storagePath;
    }
}
