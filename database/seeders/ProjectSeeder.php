<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'E-commerce System',
            'tech' => 'Laravel, Tailwind',
            'description' => 'A full-featured online store with checkout and orders.',
            'link' => 'https://github.com/yourusername/ecommerce',
        ]);

        Project::create([
            'title' => 'Portfolio Website',
            'tech' => 'React, Laravel API',
            'description' => 'Personal portfolio showcasing projects and skills.',
            'link' => 'https://yourportfolio.com',
        ]);

        Project::create([
            'title' => 'Project Manager',
            'tech' => 'Laravel, PHP, Livewire, SQLite',
            'description' => 'A project management application for creating projects, managing tasks, tracking progress, and organizing work.',
            'link' => 'https://github.com/yourusername/project-manager',
        ]);
    }
}