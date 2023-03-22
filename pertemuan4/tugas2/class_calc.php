<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
class Calculator {
    private $x;
    private $y;

    public function __construct($bil1,$bil2) {
        $this->x = $bil1;
        $this->y = $bil2;
    }
    public function tambah(){
        $hasil = $this->x + $this->y;
        return $hasil;
    }
    public function kurang(){
        $hasil = $this->x - $this->y;
        return $hasil;
    }
    public function bagi(){
        $hasil = $this->x / $this->y;
        return $hasil;
    }
    public function kali(){
        $hasil = $this->x * $this->y;
        return $hasil;
    }
}
echo "<form action='' method= 'post'>
        bilangan 1 : <input type='text' name='bill' />
            <select name='operator'>
            <option value='tambah'>+</option>
            <option value='kurang'>-</option>
            <option value='bagi'>:</option>
            <option value='kali'>x</option>
            </select>
        Bilangan 2 : <input type 'text' name='bil2' />
        <input type='submit' name='hitung' value='hitung'/>
        </form>";

// membuat objek dan memanggil method
$calculator = new Calculator(10, 5);

echo "Hasil Pertambahan: ".$calculator->tambah()."<br>";
echo "Hasil Pengurangan: ".$calculator->kurang()."<br>";
echo "Hasil Pembagian: ".$calculator->bagi()."<br>";
echo "Hasil Perkalian: ".$calculator->kali()."<br>";

?>