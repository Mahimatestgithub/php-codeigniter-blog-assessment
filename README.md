
# PHP CodeIgniter Blog Assessment  

## Project Overview  
This project is a basic blog application built using PHP, MySQL, HTML, CSS, JavaScript, and Bootstrap. It includes the following features:  

- **Homepage**: Displays a list of blog posts with a title, excerpt, author name, publication date, and a "Read More" link.  
- **Blog Detail Page**: Displays the full content of a blog post and allows users to add comments. All comments are displayed below the form.  
- **Admin Panel**: Allows administrators to add, edit, and delete blog posts.  
- **Styling**: Bootstrap has been used for a responsive and modern design.  

---

## Instructions to Set Up the Project Locally  

### Prerequisites:  
1. PHP installed on your system (minimum version 7.4).  
2. MySQL installed and running.  
3. Composer installed (for dependency management).  
4. A web server like Apache or Nginx.  
5. Git installed for version control.  

### Steps to Set Up the Project:  

1. **Clone the Repository**:  
   ```bash  
   git clone https://github.com/your-repository-link.git  
   cd php-codeigniter-blog-assessment  
   ```  

2. **Set Up the Database**:  
   - Create a MySQL database named `blog` (or update the name in the `.env` file if needed).  
   - Import the SQL file provided (`blog.sql`) into your database using:  
     ```bash  
     mysql -u root -p blog < blog.sql  
     ```  

3. **Install Dependencies**:  
   - If using CodeIgniter 4, install its dependencies via Composer:  
     ```bash  
     composer install  
     ```  

4. **Configure the Environment**:  
   - Rename the `.env.example` file to `.env`.  
   - Update the following fields with your database credentials:  
     ```bash  
     database.default.hostname = localhost  
     database.default.database = blog  
     database.default.username = your-username  
     database.default.password = your-password  
     database.default.DBDriver = MySQLi  
     ```  

5. **Run the Application**:  
   - Start the PHP built-in server or use your web server:  
     ```bash  
     php spark serve  
     ```  
   - Open your browser and navigate to `http://localhost:8080` for the homepage.  

---
6. **Screenshots of the Pages**
- To help you better understand the design and layout, I have attached screenshots of all the pages included in the project:

- Homepage: Shows the list of blog posts with the "Read More" link.

- Blog Detail Page: Displays the full post and the comment section.

- Admin Panel: Shows the list of blog posts with options to edit or delete them.
---
## Instructions to Run the Project  

1. Access the **Homepage** at `http://localhost:8080`.  
2. Navigate to individual blog posts using the "Read More" link.  
3. Use the **Admin Panel** for managing blog posts at `http://localhost:8080/admin`.  
4. Add comments via the blog detail page.  

---

