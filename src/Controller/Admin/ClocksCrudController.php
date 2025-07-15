<?php

namespace App\Controller\Admin;

use App\Entity\Clocks;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ClocksCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Clocks::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
        IdField::new('id')->hideOnForm(),
        TextField::new('name'),
        NumberField::new('price'),
        TextEditorField::new('describ'),
        AssociationField::new('subTypeClocks')
        ->setFormTypeOptions([
            'choice_label'=>'label',
        ]),
        TextField::new('imageFile', 'Image')
        ->setFormType(VichImageType::class)
        ->onlyOnForms(),
        ImageField::new('imageName', 'Image')
        ->setBasePath('images/upload')
        ->onlyOnIndex(),
        ];
    }
}
