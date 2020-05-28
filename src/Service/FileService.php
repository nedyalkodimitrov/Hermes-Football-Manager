<?php


namespace App\Service;


use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Form\FormInterface;

class FileService
{

    private $params;
    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    public function MoveImage(FormInterface $form)
    {
        if ($form->isSubmitted()) {
            /** @var UploadedFile $file */
            $file = $form->get('image')->getData();

            $imageNewFileName = $this->generateUniqueFileName() . uniqid() . '.' . $file->guessExtension();
            try {
                $file->move(
                    $this->params->get('images_directory'),
                    $imageNewFileName
                );
                return $imageNewFileName;
            } catch (FileException $e) {
                return null;
            }
        }
    }

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }

}