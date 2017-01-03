<?php
/*
* MIT License
* 
* Copyright (c) 2016 Keith J. Cancel
* 
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
* 
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*/

/**
* @file image.php
* @author  Keith Cancel <admin@keith.pro>
* @version 1.0
*
* The is file contains the abstract image class.
*/
declare(strict_types = 1);
namespace Kaiga;

abstract class Image {
    /// The max Image area is 16K^2
    const MAX_AREA = 268435456;
    final protected function __construct(){}
    abstract public function GDResource();
    abstract public function height();
    abstract public function width();
    abstract protected function loadFromFile(string $file_path);
    abstract protected function loadFromDataString(string $data);
    public static function newFromFile(string $file_path) {
        $image = new static();
        $image->loadFromFile($file_path);
		return $image;
	}
	public static function newFromDataString(string $data) {
		$image = new static();
        $image->loadFromDataString($data);
		return $image;
	}
}