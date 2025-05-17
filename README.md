🎓 EduPro – Nền tảng bán khóa học trực tuyến hiện đại

EduPro là nền tảng bán khóa học trực tuyến chuyên nghiệp, thân thiện với người dùng, hỗ trợ cả học viên và giảng viên. Được thiết kế theo kiến trúc hiện đại, hỗ trợ thanh toán, giảm giá, quản lý khóa học, bài giảng, học viên, giáo viên và đơn hàng.

🚀 Tính năng nổi bật
🎯 Dành cho học viên
Đăng ký & đăng nhập

Duyệt, tìm kiếm & đăng ký khóa học

Theo dõi tiến độ học

Đánh giá & bình luận

🧑‍🏫 Dành cho giáo viên
Quản lý khóa học: tạo/sửa/xóa

Upload video, bài giảng & bài kiểm tra

Quản lý học viên trong từng khóa

💼 Dành cho quản trị viên
Quản lý người dùng (Admin, Teacher, Student)

Thống kê doanh thu, lượt học

Cấu hình hệ thống, phân quyền

💰 Tính năng bán hàng
Thanh toán online & COD

Áp dụng mã giảm giá

Tự động tính phí vận chuyển

🔧 Công nghệ sử dụng
Layer	Stack
Backend	Laravel 12.x, Eloquent ORM, REST API
Frontend	Blade / ReactJS / TailwindCSS
Auth	Laravel Sanctum / Breeze
Database	MySQL 8.x
DevOps	Laravel Scheduler, Artisan Commands
Backup	Spatie Laravel Backup
File Upload	Laravel FileStorage
Testing	PHPUnit, Laravel Test Factory

⚙️ Cài đặt dự án
bash
Copy
Edit
# Clone dự án
git clone https://github.com/huydqph53310/course.git
cd edupro

# Cài đặt gói PHP
composer install

# Tạo .env
cp .env.example .env
php artisan key:generate

# Cấu hình database trong .env rồi chạy:
php artisan migrate --seed

# (Nếu có React)
npm install && npm run dev

# Tạo bản backup ban đầu (tuỳ chọn)
php artisan backup:run --only-db
🧪 Dữ liệu mẫu
Seeder đã có sẵn:

10 khóa học mẫu

5 giáo viên

50 học viên

100 đơn hàng

Lệnh chạy:

bash
Copy
Edit
php artisan migrate:fresh --seed


🔐 Tài khoản mẫu
Role	| Email	                |   Mật khẩu
Admin	| admin@example.com	    |   password
Teacher	| teacher1@example.com	|   password
Student	| student1@example.com	|   password

🧩 Thư mục chính
bash
Copy
Edit
app/
├── Http/Controllers/      # Xử lý route và logic
├── Models/                # Model Eloquent
├── Console/Commands/      # Lệnh tùy chỉnh (VD: DBBackup)
resources/views/           # Giao diện Blade
database/factories/        # Tạo dữ liệu mẫu
routes/web.php             # Các tuyến đường chính


🎯 Kế hoạch mở rộng (roadmap)
 Quản lý đơn hàng & báo cáo doanh thu

 Tính năng giỏ hàng & thanh toán

 Chat trực tiếp với giáo viên

 Chấm điểm bài tập tự động bằng AI

 Hệ thống chứng chỉ PDF sau khi học xong

👨‍💻 Nhóm phát triển
Thành viên	Vai trò
Bạn A	Backend Laravel Leader
Bạn B	Frontend ReactJS Dev
Bạn C	Database & API Tester
Bạn D	UI/UX Designer

📄 License
Dự án mã nguồn mở theo giấy phép MIT – Xem chi tiết tại đây

⭐ Gợi ý
Bạn có thể deploy lên Laravel Forge, Ploi, hoặc tự build Docker image để chạy production.
