<?php
namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\File;

class StringToFileTransformer implements DataTransformerInterface
{
    public function transform($file)
    {
        return $file;
    }

    public function reverseTransform($string)
    {
        if (!$string) {
            return null;
        }

        return new File($string);
    }
}