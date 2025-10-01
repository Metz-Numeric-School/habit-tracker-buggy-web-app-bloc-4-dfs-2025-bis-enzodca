<?php
namespace App\Controller\Admin;

use App\Repository\UserRepository;
use App\Repository\HabitRepository;
use App\Repository\HabitLogRepository;
use Mns\Buggy\Core\AbstractController;

class HabitsController extends AbstractController
{
    private HabitRepository $HabitRepository;

    public function __construct()
    {
        $this->HabitRepository = new HabitRepository();
        
    }
    
    public function index()
    {
        $habits = $this->HabitRepository->findAll();
        return $this->render('admin/habits/index.html.php', [
            'habits' => $habits,
        ]);
    }
}