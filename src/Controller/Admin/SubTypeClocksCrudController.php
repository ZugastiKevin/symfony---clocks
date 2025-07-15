<?php

namespace App\Controller\Admin;

use App\Entity\SubTypeClocks;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SubTypeClocksCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SubTypeClocks::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            AssociationField::new('typeClocks')
            ->setFormTypeOptions([
                'choice_label'=>'label',
            ]),
            TextField::new('label'),
            TextareaField::new('story'),
            TextareaField::new('subStory'),
        ];
    }
}
