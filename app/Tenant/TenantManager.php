<?php
declare(strict_types=1);

namespace App\Tenant;


use App\Models\Company;

class TenantManager
{
    private $tenant;

    /**
     * @return Company
     */
    public function getTenant(): ?Company //null or Company
    {
        return $this->tenant;
    }

    /**
     * @param Company $tenant
     */
    public function setTenant(?Company $tenant): void
    {
        $this->tenant = $tenant;
    }
}