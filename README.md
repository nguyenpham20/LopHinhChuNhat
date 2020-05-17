# LopHinhChuNhat
Bước 1
Tạo lớp Rectangle, khai báo các thuộc tính (properties), định nghĩa các phương thức khởi tạo (__construct).

class Rectangle
{
  public $width;
  public $height;

  public function __construct($width, $height)
  {
      $this->width = $width;
      $this->height = $height;
  }
}

Bước 2
Định nghĩa các phương thức getArea(), getPerimeter(), display()

//tinh dien tich
public function getArea()
{
  return $this->width * $this->height;
}

//tinh chu vi
public function getPerimeter()
{
  return (($this->width + $this->height) * 2);
}

public function display()
{
  return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
}
Bước 3
Tạo file index.php để thực thi chương trình

Bước 4
Khởi tạo một đối tượng thuộc lớp Rectangle với phương thức khởi tạo chứa 2 tham số width, height

$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
Bước 5
Gọi các phương thức của lớp Rectangle thông qua đối tượng rectangle đã tạo để hiển thị các thông số của hình chữ nhật

echo $rectangle->width; // 0utput: 10
echo $rectangle->height; // 0utput: 20

$rectangle->height = 30;
$rectangle->width = 20;

echo $rectangle->height; // 0utput: 30
echo $rectangle->width; // 0utput: 20
echo $rectangle->getPerimeter(); // 0utput: 100
echo $rectangle->getArea(); // Output: 600
echo ("Your Rectangle". $rectangle->display());
Mã nguồn mẫu: https://github.com/codegym-vn/php_oop_rectangle
