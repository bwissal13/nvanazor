<?php
namespace App\Services;

use App\Repositories\ShoppingCartRepositoryInterface;

class ShoppingCartService
{
    protected $shoppingCartRepository;

    public function __construct(ShoppingCartRepositoryInterface $shoppingCartRepository)
    {
        $this->shoppingCartRepository = $shoppingCartRepository;
    }

    public function addItem(array $data)
    {
        // Perform any additional business logic, validation, or data manipulation here
        
        return $this->shoppingCartRepository->addItem($data);
    }

    public function removeItem(array $data)
    {
        // Perform any additional business logic, validation, or data manipulation here
        
        return $this->shoppingCartRepository->removeItem($data);
    }

    public function editItem(array $data)
    {
        // Perform any additional business logic, validation, or data manipulation here
        
        return $this->shoppingCartRepository->editItem($data);
    }

    public function getCartItems($user_id)
    {
        // Perform any additional business logic, validation, or data manipulation here
        
        return $this->shoppingCartRepository->getCartItems($user_id);
    }
}
