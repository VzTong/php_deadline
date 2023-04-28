-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 05:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `bt`
--
-- --------------------------------------------------------
--
-- Table structure for table `member`
--
CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `member`
--
INSERT INTO
  `member` (`id`, `name`, `password`)
VALUES
  (
    1,
    'admin',
    '$2y$12$5kjr1oF/LQWiM4p0NvxKpOd3OhwAKQdQ9eUuk3e9XzddNA15YDLZq'
  );

-- --------------------------------------------------------
--
-- Table structure for table `product`
--
CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(250) DEFAULT NULL,
  `heft_product` varchar(100) DEFAULT NULL,
  `price_old_product` float DEFAULT NULL,
  `price_new_product` float DEFAULT NULL,
  `data_type` varchar(100) DEFAULT NULL,
  `details_product` longtext DEFAULT NULL,
  `img_product` varchar(200) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `product`
--
INSERT INTO
  `product` (
    `id_product`,
    `name_product`,
    `heft_product`,
    `price_old_product`,
    `price_new_product`,
    `data_type`,
    `details_product`,
    `img_product`
  )
VALUES
  (
    2,
    'Moong',
    '1 kg',
    2,
    1.5,
    'Special Offer',
    'Đậu xanh vị ngọt, hơi tanh, tính hàn, không độc, bổ nguyên khí, thanh nhiệt mát gan. Nhờ những chất chống oxy hóa vitexin và isovitexin trong đậu xanh có thể giúp bảo vệ tế bào khỏi các tổn thương do sốc nhiệt. Thích hợp với các bệnh nhân bị say nắng, miệng khát, người nóng, thấp nhiệt, ung nhọt,...',
    'product/img_product/of-1682012072.png'
  ),
  (
    3,
    'Wheat',
    '500 g',
    7,
    6,
    'Kitchen',
    'Lúa mì hay lúa miến, tiểu mạch, tên khoa học: Triticum spp. là cây lương thực, thuộc một nhóm các loài cỏ đã thuần dưỡng từ khu vực Levant và được gieo trồng rộng khắp thế giới. Về tổng thể, lúa mì là thực phẩm quan trọng cho loài người, sản lượng của nó chỉ đứng sau bắp và lúa gạo trong số các loài cây lương thực.',
    'product/img_product/of24-1682063606.png'
  ),
  (
    4,
    'Baby Oil',
    '250 ml',
    7,
    6,
    'Personal Care',
    'Dầu mát-xa và dưỡng ẩm Johnson\'s baby Oil 250ml chứa công thức khóa độ ẩm cao hơn gấp 10 lần so với các loại kem dưỡng da thông thường trên da khô, đảm bảo mang đến cho bé một sản phẩm chăm sóc làn da vô cùng hoàn hảo. Sản phẩm đã được chứng minh lâm sàng có tác dụng ngăn ngừa việc mất độ ẩm quá mức trên da, do đó thích hợp sử dụng không chỉ cho bé mà cho tất cả các thành viên gia đình, đặc biệt vào những ngày thời tiết hanh khô. Johnson\'s baby Oil được làm từ dầu khoáng tinh khiết nên cũng rất thích hợp để mát-xa cho bé trước và sau khi tắm giúp làm và giữ ấm cho cơ thể. ',
    'product/img_product/of36-1682063988.png'
  ),
  (
    5,
    'Sunflower Oil',
    '5 kg',
    10,
    9,
    'Special Offer',
    'Dầu hướng dương có nhiều loại khác nhau với tỷ lệ acid béo không no khác nhau. Chính thành phần các acid béo không no cao này trong dầu hướng dương khiến dầu hướng dương trở thành một trong những loại dầu và mỡ thực vật tốt nhất cho sức khỏe, đặc biệt là đối với những người có nguy cơ mắc bệnh tim mạch. Trong một số loại dầu hướng dương chế biến, tỷ lệ acid béo không no, đặc biệt là acid béo không no ngắn thậm chí còn cao hơn cả trong dầu ô liu. Dầu hướng dương cũng thường được chế biến thành diesel sinh học do chi phí sản xuất dầu hướng dương rẻ hơn dầu đậu nành và dầu ô liu.',
    'product/img_product/of1-1682065330.png'
  ),
  (
    6,
    'Cat Food',
    '500 g',
    7,
    6,
    'Household',
    'Thức ăn cho mèo là thức ăn riêng biệt dành cho loài mèo sử dụng. Mèo có các yêu cầu cụ thể về hàm lượng chất dinh dưỡng trong chế độ ăn uống của chúng.',
    'product/img_product/of48-1682065660.png'
  ),
  (
    7,
    'Soap',
    '250 g',
    5,
    4.5,
    'Personal Care',
    'Xà phòng là muối kali hay natri của axit béo hay xà phòng tổng hợp đều có hai phần. Một là đầu hiđrocacbon kị nước, còn một đầu là ion kim loại ưa nước. Đối với các vết bẩn, dầu mỡ bám trên mặt vải thì đầu kị nước sẽ quay vào trong vết bẩn, đầu ưa nước hướng ra ngoài. Sau đó sẽ tạo thành mixen là một khối dạng cầu có đầu ưa nước quay ra ngoài tách vết bẩn ra khỏi bề mặt vải.',
    'product/img_product/of37-1682066210.png'
  ),
  (
    8,
    'Hair Gel',
    '100 g',
    4,
    3.5,
    'Personal Care',
    'Gel vuốt tóc là một sản phẩm tạo kiểu tóc được sử dụng để hóa cứng tóc thành một kiểu tóc riêng biệt.',
    'product/img_product/of38-1682066398.png'
  ),
  (
    9,
    'Lotion',
    '100 ml',
    1,
    0.8,
    'Personal Care',
    'Sữa dưỡng thể hay sữa dưỡng da là loại mỹ phẩm pha chế có độ nhớt thấp, thoa da không bị bong tróc. Ngược lại, kem và gel có độ nhớt cao hơn. Sữa dưỡng thể thoa da bên ngoài bằng tay không, bàn chải, vải sạch, bông hoặc gạc.',
    'product/img_product/of39-1682066559.png'
  ),
  (
    10,
    'Safety Pins',
    '100 g',
    5,
    4.5,
    'Household',
    'The safety pin is a variation of the regular pin which includes a simple spring mechanism and a clasp. The clasp forms a closed loop to properly fasten the pin to whatever it is applied to and covers the end of the pin to protect the user from the sharp point.',
    'product/img_product/of49-1682067970.png'
  ),
  (
    11,
    'Apple',
    '200 g',
    4,
    3.5,
    'Household',
    'Apple Indian is blush red and the texture is smooth. Flesh is greenish white and grained, sweet and juicy. Its crispiness and aromatic features made it more attractive. Contains soluble fiber which controls cholesterol levels, Control your weight, Detoxify your liver. The phytonutrients and antioxidants in apples may help reduce the risk of developing cancer,...',
    'product/img_product/of11-1682069552.png'
  ),
  (
    12,
    'Candle Set',
    '1 pc',
    1,
    0.8,
    'Household',
    'A luxury candle that warms any room with the comforting, fresh scent of a Lazy Sunday Morning.',
    'product/img_product/si-1682069425.jpg'
  ),
  (
    13,
    'Peach Halves',
    '250 g',
    5,
    4.5,
    'Kitchen',
    'Choice sliced and halved clingstone peaches in heavy syrup shall be prepared from peaches of similar varietal characteristics that have been washed, peeled and hand sorted for quality.',
    'product/img_product/of25-1682069126.png'
  ),
  (
    14,
    'Banana',
    '1 kg',
    4,
    3.5,
    'Kitchen',
    'Chuối là tên gọi loại quả của các loài cây thuộc chi Chuối; đây được coi là một trong các loại trái cây được ăn rộng rãi nhất. Những cây chuối có gốc từ vùng nhiệt đới ở Đông Nam Á và Úc. Ngày nay, chuối được trồng khắp vùng nhiệt đới.',
    'product/img_product/of26-1682069819.png'
  ),
  (
    15,
    'Rice',
    '500 g',
    1,
    0.8,
    'Kitchen',
    'Gạo là một sản phẩm lương thực thu từ cây lúa. Hạt gạo thường có màu trắng, nâu hoặc đỏ thẫm, chứa nhiều dinh dưỡng. Hạt gạo chính là nhân của thóc sau khi xay để tách bỏ vỏ trấu. ',
    'product/img_product/of27-1682069806.png'
  ),
  (
    16,
    'Kabuli Chana',
    '1 kg',
    3,
    2,
    'Special Offer',
    'The chickpea is a key ingredient in Mediterranean and Middle Eastern cuisines, used in hummus, and, when soaked and coarsely ground with herbs and spices then made into patties and fried, falafel. It also is important in Indian cuisine, used in salads, soups and stews, and curry, in chana masala, and in other food products that contain channa (chickpeas). In 2019, India was responsible for 70% of global chickpea production.',
    'product/img_product/of2-1682070172.png'
  ),
  (
    17,
    'Soya Chunks',
    '1 kg',
    4,
    3.5,
    'Special Offer',
    'MDH Soyateun Chunks cung cấp vitamin, khoáng chất và chất xơ. Hạt cốm siêu mềm, dễ tiêu hóa, hảo hạng và tốt cho mọi lứa tuổi. Chúng giảm trọng lượng cơ thể do hàm lượng chất béo thấp, loại bỏ các Cholesterol xấu, tăng cường sức khỏe của xương.  Sử dụng tromg các món salad, món hầm, súp.',
    'product/img_product/of3-1682070253.png'
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `member`
--
ALTER TABLE
  `member`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE
  `product`
ADD
  PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE
  `member`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE
  `product`
MODIFY
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 20;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;