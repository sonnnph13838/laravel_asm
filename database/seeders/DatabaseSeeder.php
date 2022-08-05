<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { {
            $kinds_of_room =
                [
                    [
                        "name" => "Single",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Double",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Tripple",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Quad",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Queen",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "King",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Twin",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Double-double",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Hollywood Twin Room",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Studio",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Phòng Tổng Thống",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Apartment ",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                ];

            $rooms =
                [
                    [
                        "name" => "Single",
                        "price" => "2000000",
                        "discription" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "room_service" => "1",
                        "features" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "id_kind_of_room" => "1",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Double",
                        "price" => "2000000",
                        "discription" => "Phòng được thiết kế dành cho 2 khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Double thường nằm trong khoảng 40 - 45 m2.",
                        "room_service" => "1",
                        "features" => "Phòng được thiết kế dành cho 2 khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Double thường nằm trong khoảng 40 - 45 m2.",
                        "id_kind_of_room" => "2",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Tripple",
                        "price" => "2000000",
                        "discription" => "Phòng được thiết kế dành cho 3 khách ở. Trang bị 3 giường đơn hoặc 1 giường đôi và 1 giường đơn, hoặc 2 giường đôi. Diện tích phòng Tripple thường nằm trong khoảng 45 - 65 m2.",
                        "room_service" => "1",
                        "features" => "Phòng được thiết kế dành cho 3 khách ở. Trang bị 3 giường đơn hoặc 1 giường đôi và 1 giường đơn, hoặc 2 giường đôi. Diện tích phòng Tripple thường nằm trong khoảng 45 - 65 m2.",
                        "id_kind_of_room" => "3",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Quad",
                        "price" => "2000000",
                        "discription" => "Phòng được thiết kế dành cho 4 khách ở. Trang bị 2 giường hoặc nhiều hơn. Diện tích phòng Quad thường nằm trong khoảng 70 - 85 m2.",
                        "room_service" => "1",
                        "features" => "Phòng được thiết kế dành cho 4 khách ở. Trang bị 2 giường hoặc nhiều hơn. Diện tích phòng Quad thường nằm trong khoảng 70 - 85 m2.",
                        "id_kind_of_room" => "4",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Queen",
                        "price" => "2000000",
                        "discription" => "Phòng được trang bị giường cỡ Queen. Được thiết kế cho một hoặc nhiều người ở. Diện tích phòng Queen thường nằm trong khoảng 32 - 50 m2.",
                        "room_service" => "1",
                        "features" => "Phòng được trang bị giường cỡ Queen. Được thiết kế cho một hoặc nhiều người ở. Diện tích phòng Queen thường nằm trong khoảng 32 - 50 m2.",
                        "id_kind_of_room" => "5",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "King",
                        "price" => "2000000",
                        "discription" => "Phòng được trang bị giường cỡ King. Được thiết kế cho một hoặc nhiều người ở. Diện tích phòng King thường nằm trong khoảng 32 - 50 m2..",
                        "room_service" => "1",
                        "features" => "Phòng được trang bị giường cỡ King. Được thiết kế cho một hoặc nhiều người ở. Diện tích phòng King thường nằm trong khoảng 32 - 50 m2.",
                        "id_kind_of_room" => "6",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Twin",
                        "price" => "2000000",
                        "discription" => "Phòng được trang bị 2 giường đơn. Được thiết kế cho một hoặc nhiều người ở. Diện tích phòng Twin thường nằm trong khoảng 32 - 40 m2.",
                        "room_service" => "1",
                        "features" => "Phòng được trang bị 2 giường đơn. Được thiết kế cho một hoặc nhiều người ở. Diện tích phòng Twin thường nằm trong khoảng 32 - 40 m2.",
                        "id_kind_of_room" => "7",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Double-double",
                        "price" => "2000000",
                        "discription" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "room_service" => "1",
                        "features" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "id_kind_of_room" => "8",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Hollywood Twin Room",
                        "price" => "2000000",
                        "discription" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "room_service" => "1",
                        "features" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "id_kind_of_room" => "9",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Studio",
                        "price" => "2000000",
                        "discription" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "room_service" => "1",
                        "features" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "id_kind_of_room" => "10",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Phòng Tổng Thống",
                        "price" => "2000000",
                        "discription" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "room_service" => "1",
                        "features" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "id_kind_of_room" => "11",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                    [
                        "name" => "Apartment ",
                        "price" => "2000000",
                        "discription" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "room_service" => "1",
                        "features" => "Phòng được thiết kế dành cho một khách ở. Có thể có một hoặc nhiều giường. Diện tích phòng Single thường nằm trong khoảng 37 - 45 m2.",
                        "id_kind_of_room" => "12",
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ],
                ];
            $services = [
                [
                    "name" => "Dịch vụ Spa ",
                    "price" => "200000",
                ],
                [
                    "name" => "Dịch vụ giặt, ủi là ",
                    "price" => "200000",
                ],
                [
                    "name" => "Dịch vụ xe đưa đón sân bay ",
                    "price" => "200000",
                ],
                [
                    "name" => "Fitness/Gym center ",
                    "price" => "200000",
                ],
                [
                    "name" => "Dịch vụ bể bơi 4 mùa ",
                    "price" => "200000",
                ],
                [
                    "name" => "Dịch vụ dọn phòng ",
                    "price" => "200000",
                ],
                [
                    "name" => "Dịch vụ dọn phòng ",
                    "price" => "200000",
                ],
                [
                    "name" => "Quầy bar ",
                    "price" => "200000",
                ],
                [
                    "name" => "Dịch vụ ăn uống tại nhà hàng ",
                    "price" => "200000",
                ],
                [
                    "name" => "Dịch vụ phòng họp ",
                    "price" => "200000",
                ],
                [
                    "name" => "Dịch vụ phục vụ tận phòng ",
                    "price" => "200000",
                ],

            ];
            $contacts = [
                [
                    "name" => "Nguyễn Bá Tuyên",
                    "email" => "tuyen@gmail.com",
                    "messages" => "Dịch vụ tốt"
                ],
            ];
            $blogs = [
                [
                    "title" => "Chưa từng có, khách sạn 5 sao bậc nhất Hà Nội chỉ 1 triệu/đêm",
                    "image1" => "bv11.jpg",
                    "image2" => "bv12.jpg",
                    "image3" => "bv13.jpg",
                    "discription" => "Các khách sạn giảm giá mạnh trong dịp Tết để có thêm khách trong bối cảnh ảnh hưởng của dịch bệnh.",
                    "content" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                    "content1" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                ],
                [
                    "title" => "Chưa từng có, khách sạn 5 sao bậc nhất Hà Nội chỉ 1 triệu/đêm",
                    "image1" => "bv11.jpg",
                    "image2" => "bv12.jpg",
                    "image3" => "bv13.jpg",
                    "discription" => "Các khách sạn giảm giá mạnh trong dịp Tết để có thêm khách trong bối cảnh ảnh hưởng của dịch bệnh.",
                    "content" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                    "content1" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                ],
                [
                    "title" => "Chưa từng có, khách sạn 5 sao bậc nhất Hà Nội chỉ 1 triệu/đêm",
                    "image1" => "bv11.jpg",
                    "image2" => "bv12.jpg",
                    "image3" => "bv13.jpg",
                    "discription" => "Các khách sạn giảm giá mạnh trong dịp Tết để có thêm khách trong bối cảnh ảnh hưởng của dịch bệnh.",
                    "content" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                    "content1" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                ],
                [
                    "title" => "Chưa từng có, khách sạn 5 sao bậc nhất Hà Nội chỉ 1 triệu/đêm",
                    "image1" => "bv11.jpg",
                    "image2" => "bv12.jpg",
                    "image3" => "bv13.jpg",
                    "discription" => "Các khách sạn giảm giá mạnh trong dịp Tết để có thêm khách trong bối cảnh ảnh hưởng của dịch bệnh.",
                    "content" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                    "content1" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                ],
                [
                    "title" => "Chưa từng có, khách sạn 5 sao bậc nhất Hà Nội chỉ 1 triệu/đêm",
                    "image1" => "bv11.jpg",
                    "image2" => "bv12.jpg",
                    "image3" => "bv13.jpg",
                    "discription" => "Các khách sạn giảm giá mạnh trong dịp Tết để có thêm khách trong bối cảnh ảnh hưởng của dịch bệnh.",
                    "content" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                    "content1" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                ],
                [
                    "title" => "Chưa từng có, khách sạn 5 sao bậc nhất Hà Nội chỉ 1 triệu/đêm",
                    "image1" => "bv11.jpg",
                    "image2" => "bv12.jpg",
                    "image3" => "bv13.jpg",
                    "discription" => "Các khách sạn giảm giá mạnh trong dịp Tết để có thêm khách trong bối cảnh ảnh hưởng của dịch bệnh.",
                    "content" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                    "content1" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                ],
                [
                    "title" => "Chưa từng có, khách sạn 5 sao bậc nhất Hà Nội chỉ 1 triệu/đêm",
                    "image1" => "bv11.jpg",
                    "image2" => "bv12.jpg",
                    "image3" => "bv13.jpg",
                    "discription" => "Các khách sạn giảm giá mạnh trong dịp Tết để có thêm khách trong bối cảnh ảnh hưởng của dịch bệnh.",
                    "content" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                    "content1" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                ],
                [
                    "title" => "Chưa từng có, khách sạn 5 sao bậc nhất Hà Nội chỉ 1 triệu/đêm",
                    "image1" => "bv11.jpg",
                    "image2" => "bv12.jpg",
                    "image3" => "bv13.jpg",
                    "discription" => "Các khách sạn giảm giá mạnh trong dịp Tết để có thêm khách trong bối cảnh ảnh hưởng của dịch bệnh.",
                    "content" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                    "content1" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                ],
                [
                    "title" => "Chưa từng có, khách sạn 5 sao bậc nhất Hà Nội chỉ 1 triệu/đêm",
                    "image1" => "bv11.jpg",
                    "image2" => "bv12.jpg",
                    "image3" => "bv13.jpg",
                    "discription" => "Các khách sạn giảm giá mạnh trong dịp Tết để có thêm khách trong bối cảnh ảnh hưởng của dịch bệnh.",
                    "content" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                    "content1" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                ],
                [
                    "title" => "Chưa từng có, khách sạn 5 sao bậc nhất Hà Nội chỉ 1 triệu/đêm",
                    "image1" => "bv11.jpg",
                    "image2" => "bv12.jpg",
                    "image3" => "bv13.jpg",
                    "discription" => "Các khách sạn giảm giá mạnh trong dịp Tết để có thêm khách trong bối cảnh ảnh hưởng của dịch bệnh.",
                    "content" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                    "content1" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                ],
                [
                    "title" => "Chưa từng có, khách sạn 5 sao bậc nhất Hà Nội chỉ 1 triệu/đêm",
                    "image1" => "bv11.jpg",
                    "image2" => "bv12.jpg",
                    "image3" => "bv13.jpg",
                    "discription" => "Các khách sạn giảm giá mạnh trong dịp Tết để có thêm khách trong bối cảnh ảnh hưởng của dịch bệnh.",
                    "content" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                    "content1" => "Trên Booking.com, khách sạn Hanoi Paradise Center giảm từ 7 triệu xuống còn 2,2 triệu/đêm trong giai đoạn Tết",
                ],
            ];


            DB::table('kind_of_room')->insert($kinds_of_room);
            DB::table('room')->insert($rooms);
            DB::table('service')->insert($services);
            DB::table('contact')->insert($contacts);
            DB::table('blog')->insert($blogs);
        }
    }
}
