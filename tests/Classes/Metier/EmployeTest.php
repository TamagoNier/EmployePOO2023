<?php
namespace Tests\Classes\Metier;
use PHPUnit\Framework\TestCase;

final class EmployeTest extends TestCase{
    /**
     * @dataProvider fournisseurDonneesTestSomme
     */
    public function testSomme(int $attendu, int$b, int $a) {
        $this->assertSame($attendu, $a+$b);
    }
    
    /**
     * Methode fournisseuse de données 
     */
    public function fournisseurDonneesTestSomme(): array {
        return [[0,0,0,],[1,1,3],[1,0,1],[3,1,1]];
    }
}