
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

   
   ![image](https://github.com/user-attachments/assets/a3b69c8b-7634-485d-88ae-9f7d1d188f7f)

3. Navigate to individual blog posts using the "Read More" link.

   
   ![image](https://github.com/user-attachments/assets/e4a68a55-6adc-4076-9b12-97fd3a0e3faa)
   
   ![image](https://github.com/user-attachments/assets/a6be0e7a-356f-452a-bdaa-8aa3541a6824)
   
   
  - Adding Comments:

  On the Blog Detail Page, as shown in the screenshots above, you can manually add comments. The comment form is available at the bottom of the post.
  Once you fill in the required fields (your name, email, and comment), click Submit to add your comment to the post.
  All comments are displayed below the comment form after submission.

  ![image](https://github.com/user-attachments/assets/110e8ddd-05ae-4caa-901e-cb39cb1b7743)
  ![image](https://github.com/user-attachments/assets/38f7be18-43d6-4d40-80ff-2e24b7318403)
  ![image](https://github.com/user-attachments/assets/e869b277-be96-4c10-b2c4-efad1b9bffa4)


3. Use the **Admin Panel** for managing blog posts at `http://localhost:8080/admin`.


   ![image](https://github.com/user-attachments/assets/6e10e307-d8a0-4498-ab1c-56f92da7d785)
   
5. Add the new blog post

   
  ![image](https://github.com/user-attachments/assets/4f0cf1ea-a02d-4640-a7c4-1f8c41dafb41)

  

  ![image](https://github.com/user-attachments/assets/508cb1bf-d674-4745-8499-bc7a1aac02b1)

  

5. Edit the blog.

   
   
 ![image](https://github.com/user-attachments/assets/cdf70b17-b0f7-4f42-ad37-10491716e794)

 
 
The post got edited

 ![image](https://github.com/user-attachments/assets/6580a334-9c1a-4017-afa0-9f07da5fd0de)

7. Delete the blog.

   
   
   ![image](https://github.com/user-attachments/assets/bf8208b8-0c2d-4868-8bbc-e10eca259a2c)


   
   The post got deleted.



   ![image](https://github.com/user-attachments/assets/064eb8a1-8a78-4c69-964e-88d7e931773c)




---

