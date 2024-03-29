<?php

namespace Em\EmliczaczBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EvaluationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EvaluationRepository extends EntityRepository
{
    public function fetchActiveEvaluations()
    {
        return $this->getEntityManager()
                ->createQuery('SELECT e FROM EmEmliczaczBundle:Evaluation e WHERE e.active = 1 ORDER BY e.id ASC')
                ->getResult();
    }
}
