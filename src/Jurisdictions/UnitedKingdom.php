<?php namespace PhilipBrown\Basket\Jurisdictions;

use Money\Currency;
use PhilipBrown\Basket\Jurisdiction;
use PhilipBrown\Basket\TaxRates\UnitedKingdomValueAddedTax;

class UnitedKingdom implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TaxRate
     */
    private $tax;

    /**
     * Create a new Jurisdiction
     *
     * @return void
     */
    public function __construct()
    {
        $this->tax      = new UnitedKingdomValueAddedTax;
        $this->currency = new Currency('GBP');
    }

    /**
     * Return the Tax Rate
     *
     * @return TaxRate
     */
    public function rate()
    {
        return $this->tax;
    }

    /**
     * Return the currency
     *
     * @return Money\Currency
     */
    public function currency()
    {
        return $this->currency;
    }
}
