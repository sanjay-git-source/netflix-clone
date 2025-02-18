# Netflix Clone (Laravel + MSSQL)

## Description
This is a **Netflix Clone** built using **Laravel** as the backend framework and **Microsoft SQL Server (MSSQL)** as the database. The project allows users to **stream videos, manage subscriptions, create watchlists, and explore movies/shows** with a modern UI.

## Features
- 🎬 User Authentication (Login, Register, Password Reset)
- 📺 Browse and Watch Movies & TV Shows
- ❤️ Add to Watchlist / Favorites
- 🔍 Search and Filter Content
- 🎭 User Profiles (Like Netflix's Multi-Profile System)
- 🛒 Subscription & Payment Integration
- 🎥 Video Streaming with Secure URLs
- 📊 Admin Panel for Managing Content

## Technologies Used
- **Backend**: Laravel 10 (PHP Framework)
- **Database**: Microsoft SQL Server (MSSQL)
- **Frontend**: Blade Templates, Bootstrap, Tailwind CSS
- **Authentication**: Laravel Sanctum / Laravel Breeze
- **Storage**: AWS S3 / Local Storage
- **Streaming**: Video.js / HLS Streaming

## Installation & Setup
### 1. Clone the Repository
```sh
git clone https://github.com/yourusername/netflix-clone.git
cd netflix-clone
```

### 2. Install Dependencies
```sh
composer install
npm install
```

### 3. Set Up the Environment File
Copy the `.env.example` file to `.env` and update the database connection details:
```env
DB_CONNECTION=sqlsrv
DB_HOST=your-mssql-host
DB_PORT=1433
DB_DATABASE=netflix_clone
DB_USERNAME=your-username
DB_PASSWORD=your-password
```

### 4. Run Database Migrations & Seed Data
```sh
php artisan migrate --seed
```

### 5. Generate Application Key
```sh
php artisan key:generate
```

### 6. Start the Development Server
```sh
php artisan serve
```
Now, visit `http://127.0.0.1:8000` to access the Netflix Clone.

## Usage
1. **Register/Login** to the application.
2. Browse movies and TV shows.
3. Click on a title to **watch trailers or full videos**.
4. Add movies to your **watchlist**.
5. Subscribe for premium content (if implemented).

## Future Enhancements
🚀 Add AI-based recommendations
🚀 Implement real-time chat for movie discussions
🚀 Support 4K streaming with adaptive bitrate
🚀 Enable offline viewing (PWA support)

## Contributing
Feel free to **fork this repository** and submit pull requests! 😊


