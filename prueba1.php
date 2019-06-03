<?php
use PHPUnit\Framework\TestCase;

final class areaperimetroTest extends TestCase
{
  public function testarea()
  {
    $calc=new persona();
    $this->assertEquals("delete from paciente where id='2'",$calc->eliminar(2));
  }
    
    

    
}
 ?> 