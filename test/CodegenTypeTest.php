<?hh
/**
 * Copyright (c) 2015-present, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 */

namespace Facebook\HackCodegen;

use function Facebook\HackCodegen\LegacyHelpers\{
  codegen_newtype,
  codegen_shape,
  codegen_type
};

final class CodegenTypeTest extends CodegenBaseTest {

  public function testType() {
    $type = codegen_type('Point')->setType('(int, int)');
    $this->assertUnchanged($type->render());
  }

  public function testNewType() {
    $type = codegen_newtype('Point')->setType('(int, int)');
    $this->assertUnchanged($type->render());
  }

  public function testShape() {
    $type = codegen_type('Point')
      ->setShape(codegen_shape(array('x' => 'int', 'y' => 'int')));

    $this->assertUnchanged($type->render());
  }
}
