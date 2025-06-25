# AnterLab Laravel Test – Summer Remote Internship

This repository contains my solution for the **Laravel part** of the technical test provided by **Anter Lab** for the Summer Remote Internship program.

## ✅ What I Completed

I focused on code clarity, Laravel best practices, and meaningful features. Here are the completed tasks from Part 2:

### 1. ✅ CRUD – Posts
- Full CRUD operations for blog posts using Laravel Resource Controllers
- Blade views for listing, creating, editing, and showing posts
- Clean structure with `PostController` and `Post` model

### 2. ✅ Form Validation
- Validation rules for post creation and update:
  - `title`: required, max:255
  - `content`: required, min:10
- Error messages displayed in views

### 3. ✅ Seeder + Factory
- Created a `UserFactory` to generate 20 fake users
- Created a `PostFactory` to generate posts
- Each user is seeded with 1–5 posts using relationship factories

### 4. ✅ Model Relationships
- One-to-many relationship: `User` hasMany `Post`
- Posts belong to users via a `user_id` foreign key
- User-task views were excluded as only `Post` relationships were tested

### 5. ✅ Custom Artisan Command
- Created a custom Artisan command: `say:hello`
- Usage:
  ```bash
  php artisan say:hello Victor
