<?php

namespace App\Controller\Admin;

use App\Entity\CompetenciaBasica;
use App\Entity\Curso;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

class CompetenciaBasicaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CompetenciaBasica::class;
    }

    public function configureFields(string $pageName): iterable{
        yield IdField::new('id') -> onlyOnIndex();
        yield AssociationField::new('id_curso');
        yield TextareaField::new('descripcion');
    }
}
