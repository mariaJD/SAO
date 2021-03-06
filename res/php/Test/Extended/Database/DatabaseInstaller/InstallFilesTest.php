<?php

namespace SAO\Test\Extended\Database\DatabaseInstaller;

use SAO\Modules\Extended\Database\DatabaseInstaller\InstallFiles;
use SAO\Modules\Extended\Database\DatabaseInstaller\InstallFilesArea;
use SAO\Modules\Util\Functions;
use PHPUnit\Framework\TestCase;

class InstallFilesTest extends TestCase {

    public function testgetBaseDir() {
        $dir = Functions::parseDir(["res", "sql"]);
        $this->assertEquals($dir, Functions::parseDir(InstallFiles::getBaseDir()));
    }

    public function testgetFileArray() {
        $c_arr = 2;
        $c_tables = 8;
        $c_data = 1;

        $arr = InstallFiles::getFileArray();

        $this->assertCount($c_arr, $arr);
        $this->assertCount($c_tables, $arr[InstallFilesArea::TABLES]);
        $this->assertCount($c_data, $arr[InstallFilesArea::DATA]);
    }

}
