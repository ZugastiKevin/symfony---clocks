<?php

namespace App\Controller\Admin;

use App\Entity\Comments;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CommentsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comments::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
        IdField::new('id')->hideOnForm(),
        TextField::new('comment'),
        AssociationField::new('user')
        ->setFormTypeOptions([
            'choice_label'=>'email',
        ]),
        AssociationField::new('clocks')
        ->setFormTypeOptions([
            'choice_label'=>'name',
        ]),
        DateTimeField::new('createAt')->hideOnForm(),
        ];
    }
}