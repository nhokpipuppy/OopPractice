-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 05:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controldata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Id` int(11) NOT NULL,
  `Title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Content` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Id`, `Title`, `Content`) VALUES
(1, 'TITLE Bộ Quốc phòng sắp xếp lại hàng loạt đơn vị ', 'Tại hội nghị giao ban ngành Tổ chức Xây dựng Đảng ngày 2/1, Trung tướng Đỗ Căn - Phó chủ nhiệm Tổng cục Chính trị Quân đội nhân dân Việt Nam đã báo cáo về việc thực hiện chủ trương đổi mới, sắp xếp tổ chức các đơn vị quân đội.\r\nTheo đó, để cụ thể hóa công việc ở các lĩnh vực khác nhau, Bộ Quốc phòng đã xây dựng kế hoạch, đề án ở một số đơn vị để rút kinh nghiệm, sau đó triển khai trong toàn quân.\r\n\"Thời gian qua, khi công an thực hiện giải tán tổng cục, cũng có ý kiến là công an giải tán tổng cục, còn quân đội thì thế nào, nhưng vấn đề này phải căn cứ vào chức năng, nhiệm vụ của mỗi lực lượng\", Trung tướng Đỗ Căn nói và khẳng định \"Quân đội thực hiện cơ chế lãnh đạo của Đảng và trực tiếp là Bộ Chính trị, Ban Bí thư, chỉ đạo của Chính phủ\".\r\nCụ thể, Quân ủy Trung ương đã chỉ đạo sắp xếp 88 doanh nghiệp quân đội còn 17, giảm 71 doanh nghiệp. Số lượng sỹ quan, quân nhân chuyên nghiệp, công nhân viên chức quốc phòng phải giải quyết chế độ là 16.000 người, chưa tính số lao động hợp đồng của các đơn vị. \r\n\"Bộ cũng rút gọn một số binh đoàn, tổ chức lại thành đoàn kinh tế ở vùng chiến lược có điều kiện đặc biệt về quốc phòng an ninh, không tham gia nhiệm vụ làm kinh tế đơn thuần\", Tướng Căn nói.\r\nTheo ông, để việc thực hiện tinh gọn bộ máy, tinh giản biên chế được thực hiện hiệu quả, phải có sự kết hợp chặt chẽ, đồng bộ giữa tư tưởng, tổ chức và chính sách; đồng thời có sự phối hợp giữa các ban ngành trong giải quyết chế độ, chính sách.\r\nĐối với các cơ quan chiến lược, chiến dịch, Bộ cũng đã rà soát, điều chỉnh tổ chức, hợp nhất các phòng, cục có chức năng, nhiệm vụ tương đồng, phấn đấu đến năm 2021 giảm 10% quân số biên chế so với năm 2015.\r\n\"Kế hoạch giảm biên chế tập trung vào các đơn vị phục vụ, bảo đảm, giảm đầu mối trung gian; phân cấp mạnh công tác bảo đảm cho cấp dưới...\", Tướng Căn nói.\r\nVới 22 trường dạy nghề trong quân đội gồm cao đẳng, trung cấp, theo chỉ đạo của Quân ủy Trung ương, Bộ đã tiến hành cổ phần hóa, thoái vốn, giải thể; có trường bàn giao lại cho Bộ Lao động Thương binh Xã hội. \"Quân đội sẽ không tham gia lĩnh vực dạy nghề, giới thiệu việc làm như trước kia\", Phó chủ nhiệm Tổng cục Chính trị cho hay.\r\nTrong lĩnh vực giáo dục, Bộ sẽ tiếp tục chỉ đạo hệ thống nhà trường của quân đội, từ học viện cho đến các trường sỹ quan, cao đẳng... để thực hiện theo lộ trình đến năm 2020 không còn đào tạo hệ dân sự. \r\n\"Hiện có những trường quân đội đào tạo hệ dân sự nhiều gấp vài lần hệ quân sự nhưng đội ngũ cán bộ giảng dạy vẫn là của quân đội. Chúng tôi đã làm và sẽ tiến hành đồng loạt đến năm 2020, chấm dứt việc đào tạo học viên hệ dân sự. Việc này đã được thống nhất với Bộ Giáo dục Đào tạo\", Tướng Căn cho hay.\r\nNgoài ra, Bộ Quốc phòng cũng thực hiện cơ chế tự chủ về tài chính đối với 25 bệnh viện trong quân đội, từ bệnh viện Trung ương Quân đội 108 đến bệnh viện của các quân khu, quân đoàn, quân chủng. Với cách làm này, ngân sách nhà nước chi thường chuyên cho biên chế, tổ chức của bệnh viện quân đội sẽ giảm đáng kể.\r\nHệ thống báo chí trong quân đội cũng sẽ được sắp xếp, kiện toàn. Theo Tướng Căn, thời gian qua, Bộ đã làm trước ở Bộ Tổng tham mưu, cơ quan Bộ Quốc phòng. Năm cơ quan tạp chí hợp nhất lại thành một tạp chí duy nhất của Bộ Tổng tham mưu là tạp chí Quân sự quốc phòng. \r\nTrước đó, tại cuộc họp báo quý IV của Bộ Quốc phòng sáng 27/12/2018, Đại tá Nguyễn Văn Tấn, Phó cục trưởng Cục Quân lực (Bộ Tổng Tham mưu Quân đội nhân dân Việt Nam) cho biết, thực hiện Nghị quyết 18 của Trung ương về \"tiếp tục đổi mới, sắp xếp tổ chức bộ máy của hệ thống chính trị tinh gọn, hoạt động hiệu lực, hiệu quả\", Bộ Quốc phòng đã giải thể, điều chỉnh tổ chức, biên chế một số đơn vị trực thuộc Bộ Tư lệnh Bộ đội Biên phòng (quân số giảm gần 3.000 người).\r\nBộ cũng giải thể 14 Lữ đoàn Công binh dự bị động viên thuộc bảy tổng công ty, gồm: 36, 319, Đông Bắc, Thái Sơn, xây dựng Lũng Lô, xây dựng Trường Sơn, Thành An; giải thể Ban Quản lý dự án 46, 47; sáu trung tâm dạy nghề - giới thiệu việc làm...'),
(3, 'Bộ Quốc phòng không cắt giảm tổng cục, chỉ cơ cấu lại bên trong', '<p><img class=\"logo-small\" title=\"\" src=\"https://vnn-imgs-f.vgcloud.vn/logo.gif\" alt=\"\" /><span class=\"bold\"> - Trao đổi với VietNamNet, Thượng tướng Nguyễn Trọng Nghĩa, Phó chủ nhiệm Tổng cục Chính trị QĐND Việt Nam cho biết, Bộ Quốc phòng không đặt vấn đề cắt giảm cấp tổng cục như Bộ Công an mà chỉ cơ cấu lại nội bộ từng đơn vị.</span></p><p class=\"article-relate\"><a href=\"//vietnamnet.vn/vn/thoi-su/chinh-tri/bo-cong-an-tinh-gon-duoc-noi-khac-chang-co-co-noi-khong-474160.html\">Bộ Công an tinh gọn được, nơi khác chẳng có cớ nói không</a></p><p class=\"article-relate\"><a href=\"//vietnamnet.vn/vn/thoi-su/chinh-tri/tinh-gon-bo-may-se-ra-tien-ra-gao-407616.html\">Tinh gọn bộ máy sẽ ra tiền, ra gạo</a></p><p><span class=\"bold\">Khó nhưng phải quyết tâm làm</span></p><p><span class=\"italic\">Một trong những điểm nhấn của năm qua là triển khai Nghị quyết TƯ 6 về sắp xếp bộ máy tinh gọn, hiệu lực, hiệu quả, Bộ Quốc phòng đưa nghị quyết vào cuộc sống như thế nào, thưa Thượng tướng?</span></p><p><a href=\"http://vietnamnet.vn/bo-quoc-phong-tag72908.html\">Bộ Quốc phòng</a> cũng làm rất mạnh, thậm chí trước khi có nghị quyết TƯ, Bộ Chính trị đã tập trung lãnh đạo, chỉ đạo xây dựng, điều chỉnh quân đội đến năm 2021 và những năm tiếp theo theo hướng tinh, gọn, mạnh, cơ động, linh hoạt và tăng khả năng sẵn sàng chiến đấu.</p><table class=\"FmsArticleBoxStyle ImageBox ImageCenterBox Border-1 image\"><tbody><tr><td class=\"FmsArticleBoxStyle-Images image \"><img src=\"https://vnn-imgs-f.vgcloud.vn/2018/12/27/17/bo-quoc-phong-khong-cat-giam-tong-cuc-chi-co-cau-lai-ben-trong.jpg\" alt=\" \" /></td></tr><tr><td class=\"FmsArticleBoxStyle-Content image_desc\">Thượng tướng Nguyễn Trọng Nghĩa. Ảnh: T.Hằng</td></tr></tbody></table><p>Như Tổng bí thư, Chủ tịch nước nói, kiện toàn tổ chức bộ máy quân đội cũng như công an là phải giữ vững sự lãnh đạo tuyệt đối, trực tiếp về mọi mặt.</p><p>Làm sao để tăng sức mạnh chiến đấu của quân đội, đáp ứng yêu cầu bảo vệ tổ quốc, đáp ứng yêu cầu về nghệ thuật quân sự Việt Nam trong tình hình mới...</p><p>Trước mắt tập trung phương án tăng sức mạnh chiến đấu ở cơ sở, sắp xếp gọn lại, giảm khối cơ quan theo lộ trình giảm 10% biên chế.</p><p>Chẳng hạn như sắp xếp lại các tạp chí của bộ tổng tham mưu một số cơ quan; một số chức năng nhiệm vụ của các đơn vị gọn lại.</p><p>Tuy nhiên cũng có đơn vị theo yêu cầu nhiệm vụ thì mở rộng ra như Bộ Tư lệnh tác chiến không gian mạng, Cục Gìn giữ hoà bình vừa mới thành lập.</p><p>Những đơn vị nào có chức năng, nhiệm vụ quốc phòng an ninh đơn thuần thì kiên quyết cắt giảm khối DN, đồng thời có lộ trình từ nay đến 2020 sẽ cổ phần hoá.</p><p>Theo lộ trình đó sẽ tinh giản rất lớn, tuy là khó nhưng phải quyết tâm làm.</p><p><span class=\"italic\">Vừa rồi Bộ Công an mạnh dạn cắt bỏ cấp trung gian là 6 tổng cục, Bộ Quốc phòng có tính đến việc cắt giảm tầng nấc trung gian tương tự?</span></p><p>Tổ chức quân đội có đặc thù riêng để bảo đảm xây dựng thế trận tác chiến, có Quân uỷ TƯ, Bộ Tổng tham mưu, Tổng cục Chính trị, các tổng cục, quân khu, quân chủng, quân đoàn.</p><p>Hiện nay, Bộ Quốc phòng không đặt vấn đề <a href=\"http://vietnamnet.vn/tinh-gon-bo-may-tag161392.html\">cắt giảm cấp tổng cục như Bộ Công an</a> mà chỉ cơ cấu lại nội bộ từng đơn vị.</p><p>Thí dụ một số bộ tổng tham mưu, Tổng cục Chính trị, Tổng cục Hậu cần, học viện, nhà trường đều sắp xếp lại. Theo đó sẽ chuyển hết hệ thống rất lớn các trường dạy nghề của quân đội sang Bộ LĐ-TB&amp;XH.</p><div class=\"box-taitro clearfix\"><div class=\"VnnAdsPos clearfix\" data-pos=\"vt_detail_sponsor_center\"> </div></div><p>Tiến tới sẽ không có các học viện, cơ bản sẽ giảm và không nhận chỉ tiêu từ bên ngoài. Khi các hệ thống nhà trường bên ngoài đã đủ sức rồi thì mình cũng giảm, chỉ đào tạo các ngành bên ngoài chưa có điều kiện đào tạo.</p><p><span class=\"bold\">Không để việc cắt giảm tạo gánh nặng</span></p><p><span class=\"italic\">Trong quá trình sắp xếp, tinh gọn bộ máy, Bộ Quốc phòng có những giải pháp gì để an lòng cán bộ, chiến sỹ?</span></p><p>Nếu sắp xếp được khối DN sẽ ảnh hưởng đến hàng chục ngàn người lao động, sĩ quan, quân nhân chuyên nghiệp.</p><p>Tất nhiên việc này Quân uỷ TƯ, Bộ Quốc phòng thấy cả rồi nên có nghị quyết, có xây dựng kế hoạch, có công tác tuyên truyền và tất cả làm từ cơ sở, phát huy dân chủ cơ sở, lấy tinh thần tự nguyện sắp xếp, có bước đi phù hợp.</p><p>Khi sắp xếp phải kết hợp chặt chẽ với việc tổ chức cán bộ, chính sách phù hợp cho anh em. Phải có bước đi, lộ trình hết sức cụ thể, đồng bộ.</p><p>Đặc biệt tạo được hướng để cho người lao động có việc làm ổn định. Như vậy, anh em mới yên tâm, phấn khởi, chứ không để việc cắt giảm tạo gánh nặng cho những chỗ khác. </p><p><span class=\"italic\">Thượng tướng có suy nghĩ gì khi năm qua, Bộ Quốc phòng có khá nhiều cán bộ sai phạm đến mức bị kỷ luật?</span></p><p>Quân đội ta về bản chất truyền thống thì cơ bản đại bộ phận cán bộ chiến sĩ đều rất tốt. Tuy nhiên 5 ngón tay thì có ngón dài ngón ngắn, cũng có một số đồng chí có mặt này mặt khác hạn chế. Đặc biệt, có một số đồng chí vi phạm khuyết điểm mà phải xử lý pháp luật và kỷ luật.</p><p>Đây là việc cũng tồn tại từ nhiều năm, chúng ta quán triệt theo tinh thần, quan điểm của Đảng là phải tích cực, kiên quyết đấu tranh chống tham nhũng, quan liêu.</p><p>Quân ủy TƯ cũng xác định rõ và là một trong những đơn vị quyết  tâm chấp hành nghiêm, đi đầu trong việc chống các biểu hiện suy thoái, biểu hiện vi phạm pháp luật.</p><p>Các vụ việc phát hiện, có dấu hiệu vi phạm thì đều xử lý rất kiên quyết. Vừa rồi cũng đã xử lý một số vụ việc, như <a href=\"http://vietnamnet.vn/ut-troc-tag167763.html\">Đinh Ngọc Hệ</a> và sẽ tiếp tục xử lý theo đúng pháp luật.</p><p>Về quản lý đất đai, chúng ta cũng làm rất kiên quyết, có vi phạm thì Bộ trưởng Quốc phòng chỉ đạo kiên quyết, không có vùng cấm, bao che hay thiên vị.</p><div class=\"template noteblu20117 \">Bộ Quốc phòng đã giải thể, điều chỉnh tổ chức, biên chế một số đơn vị trực thuộc Bộ Tư lệnh Bộ đội Biên phòng với quân số giảm gần 3.000.<br /><br />Bộ cũng giải thể 14 lữ đoàn công binh dự bị động viên thuộc 7 tổng công ty, gồm: 36, 319, Đông Bắc, Thái Sơn, xây dựng Lũng Lô, xây dựng Trường Sơn, Thành An.<br /><br />Giải thể Ban Quản lý dự án 46, 47; 6 trung tâm dạy nghề - giới thiệu việc làm; 22 trường cao đẳng, trung cấp nghề trong toàn quân.   <br /><br />Bộ cũng tổ chức lại 4 cơ quan chiến lược làm điểm, giảm 10% biên chế; sáp nhập 4 tạp chí; sắp xếp và cổ phần hóa các DN từ 109 xuống còn 17.</div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
