# laravel-cv-chain

I. Run project
  1. Có 2 cách tạo db
     -Từ phpmyadmin import db laravel_verification.sql trong github (Nên chọn)
     -run migration để tạo db và run seed để có dữ liệu mẫu
     https://www.youtube.com/watch?v=jJAWC3pPhyM&list=PLzrVYRai0riQ-K705397wDnlhhWu-gAUh&index=28

  2. run project với url http://localhost:{port XAMP của mình}/dapp-verification/public/diploma/list
  
II. Những gì đã làm trong project
  1. Tạo 3 Model: Diploma, Major, User trong thư mục app
  2. Tạo database bằng migration, seed
  3. Tạo 3 Controller:DiplomaController, MajorController, UserController trong app/Http/Controller
  4. Tạo giao diện diploma trong resources/views/diploma 
