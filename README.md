# SL Courses - Premium Learning Platform

A modern, responsive online learning platform for Sri Lanka, built with CodeIgniter 3 framework. This platform provides a gateway to the best online courses with a sleek, animated user interface.

## 🚀 Features

- **Modern UI/UX Design**: Dark-themed interface with animated backgrounds and floating particles
- **Responsive Layout**: Fully responsive design that works on all devices
- **Course Management**: Browse and explore various online courses
- **CodeIgniter Framework**: Built on the robust CodeIgniter 3 PHP framework
- **Bootstrap Integration**: Utilizes Bootstrap for responsive grid and components
- **Animated Elements**: Smooth animations and transitions for enhanced user experience

## 🛠️ Technology Stack

- **Backend Framework**: CodeIgniter 3
- **Frontend**: HTML5, CSS3, JavaScript
- **UI Framework**: Bootstrap 5
- **Font Libraries**: 
  - Google Fonts (Outfit, Space Grotesk)
  - Bootstrap Icons
- **Additional Libraries**:
  - AOS (Animate On Scroll)
  - GLightbox (Lightbox gallery)
  - Swiper (Slider/carousel)

## 📋 Requirements

- PHP 5.6 or higher (PHP 7.x recommended)
- Apache/Nginx web server
- MySQL database (if using database features)
- mod_rewrite enabled (for clean URLs)

## 🔧 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/Kavindu02/SL-COURSES-SAMPLE-SITE.git
cd SL-COURSES-SAMPLE-SITE
```

### 2. Configure Web Server

#### For Apache:

Create a virtual host or point your document root to the project folder.

Example Apache configuration:
```apache
<VirtualHost *:80>
    ServerName slcourses.local
    DocumentRoot /path/to/SL-COURSES-SAMPLE-SITE
    
    <Directory /path/to/SL-COURSES-SAMPLE-SITE>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

#### For Nginx:

```nginx
server {
    listen 80;
    server_name slcourses.local;
    root /path/to/SL-COURSES-SAMPLE-SITE;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

### 3. Configure CodeIgniter

Edit the base URL in `application/config/config.php`:

```php
$config['base_url'] = 'http://localhost/slcourses/';
// or
$config['base_url'] = 'http://slcourses.local/';
```

### 4. Set Permissions

Set proper permissions for cache and logs directories:

```bash
chmod -R 755 application/cache
chmod -R 755 application/logs
```

### 5. Database Setup (If Needed)

If your application uses a database:

1. Create a new database
2. Import any SQL files (if provided)
3. Configure database settings in `application/config/database.php`:

```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'your_username',
    'password' => 'your_password',
    'database' => 'your_database',
    // ... other settings
);
```

## 🌐 Usage

### Accessing the Site

Once configured, access the site through your web browser:

- Default route: `http://localhost/slcourses/`
- Home page: `http://localhost/slcourses/index.php/welcome/home`
- Course details: `http://localhost/slcourses/assets/courses-details.html`

### Project Structure

```
SL-COURSES-SAMPLE-SITE/
├── application/           # CodeIgniter application files
│   ├── config/           # Configuration files
│   ├── controllers/      # Controller classes
│   ├── models/           # Model classes
│   ├── views/            # View files
│   └── ...
├── assets/               # Frontend assets
│   ├── assets/          # Nested assets (CSS, JS, images, vendor libs)
│   ├── courses-details.html
│   └── forms/
├── system/              # CodeIgniter system files
├── index.php            # Main entry point
├── .gitignore
└── README.md
```

## 🎨 Customization

### Modifying Styles

- Main styles are embedded in view files (e.g., `application/views/home.php`)
- Additional CSS files located in `assets/assets/css/`
- Color scheme is defined using CSS variables in the `:root` selector

### Adding New Pages

1. Create a new method in `application/controllers/Welcome.php` or create a new controller
2. Create corresponding view file in `application/views/`
3. Update routes in `application/config/routes.php` if needed

Example:
```php
// In Welcome.php controller
public function about() {
    $this->load->view('about');
}
```

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/your-feature`)
3. Make your changes
4. Commit your changes (`git commit -am 'Add some feature'`)
5. Push to the branch (`git push origin feature/your-feature`)
6. Create a Pull Request

## 📝 License

This project is based on CodeIgniter 3 which is released under the MIT License.

### CodeIgniter License

Copyright (c) 2014 - 2019, British Columbia Institute of Technology

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

## 🐛 Troubleshooting

### Common Issues

**Issue**: Blank page or 500 error
- **Solution**: Check that PHP version meets requirements and error reporting is enabled

**Issue**: 404 errors on page navigation
- **Solution**: Ensure mod_rewrite is enabled and .htaccess file is present

**Issue**: Permission denied errors
- **Solution**: Check permissions on `application/cache` and `application/logs` directories

**Issue**: CSS/JS not loading
- **Solution**: Verify the base_url in `config.php` is set correctly

## 📞 Support

For issues, questions, or contributions, please open an issue on the GitHub repository.

## 🙏 Acknowledgments

- [CodeIgniter](https://codeigniter.com/) - The PHP framework used
- [Bootstrap](https://getbootstrap.com/) - Frontend framework
- [BootstrapMade](https://bootstrapmade.com/) - Template inspiration
- Font providers: Google Fonts

## 📊 Project Status

This is a sample/demonstration site for showcasing an online learning platform interface and CodeIgniter integration.

---

**Made with ❤️ for the Sri Lankan education community**
