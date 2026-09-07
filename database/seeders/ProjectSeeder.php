<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::updateOrCreate(
            ['title' => 'Project Manager'],
            [
                'tech' => 'Laravel, PHP, Livewire, SQLite',
                'description' => 'A project management application for creating projects, managing tasks, tracking progress, and organizing work.',
                'link' => 'https://github.com/yourusername/project-manager',
            ]
        );

        Project::updateOrCreate(
            ['title' => 'Contact Manager'],
            [
                'tech' => 'Laravel, PHP, Blade, SQLite',
                'description' => 'A contact management application that allows users to create, view, edit, and manage their contacts.',
                'link' => 'https://github.com/yourusername/contact-manager',
            ]
        );

        Project::updateOrCreate(
            ['title' => 'Developer Portfolio'],
            [
                'tech' => 'React, Tailwind CSS, Vite, JavaScript',
                'description' => 'A modern responsive portfolio website built to showcase my skills, projects, experience, and contact information.',
                'link' => 'https://yourportfolio.com',
            ]
        );
    }
}