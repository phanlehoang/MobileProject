<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
            [ 'tenPhim' => 'Tiệc trăng máu', 'poster' => 'postertiectrangmau.jpg', 'theLoai' => 'Hài hước', 'thoiLuong' => '118 phút', 'doTuoi' => '18+', 'noiDung' => 'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.', 'daoDien' => 'Đức Thịnh', 'trailer' => 'https://www.youtube.com/watch?v=nh0BklwPN9Q&ab_channel=BHDStarCineplex'],
            [ 'tenPhim' => 'Liên quân siêu thú', 'poster' => 'posterlqst.jpg', 'theLoai' => 'Hoạt hình', 'thoiLuong' => '91 phút', 'doTuoi' => 'P', 'noiDung' => 'Năm 1969, có 1 chú chó được đưa vào không gian, nhưng một sự cố xảy ra và biến chú thành Siêu Cún. Lạc lối ở tương lai nơi tất cả mọi người đều căm ghét động vật, Siêu Cún cần tìm cho mình những trợ thủ đắc lực để giúp cậu gặp lại chủ nhân của mình. Sau cuộc gặp gỡ tình cờ với Mèo Tia Chớp, Thỏ Thông Thái và tổ chức Vệ Thú – nơi bảo vệ các loài động vật ở Glenfield, Siêu Cún và bộ sậu mới của cậu bất đắc dĩ phải đối đầu với chính quyền thị trấn và trở thành những anh hùng quả cảm.', 'daoDien' => 'Ben Smith', 'trailer' => 'https://www.youtube.com/watch?v=crR0Jq_Xnv4&ab_channel=CJEntertainmentVietnam'],
            [ 'tenPhim' => 'Phù thủy, Phù thủy', 'poster' => 'posterptpt.jpg', 'theLoai' => 'Phiêu lưu', 'thoiLuong' => '94 phút', 'doTuoi' => 'P', 'noiDung' => 'Trong chuyến đi chơi cùng bà, một cậu bé 7 tuổi vô tình lọt vào hội nghị của các phù thủy và bị Phù Thủy Tối Thượng biến thành chuột bằng một loại thuốc đặc biệt. Đây cũng chính là chất độc ả định dùng để biến tất cả trẻ em thành loài gặm nhấm. Cùng với bà mình, cậu bé phải tìm mọi cách trở lại hình dạng thật và đánh bại âm mưu của binh đoàn Phù Thủy.', 'daoDien' => 'Robert Zemeckis', 'trailer' => 'https://www.youtube.com/watch?v=Kmd24MrCHXI&feature=emb_title&ab_channel=CGVCinemasVietnam'],
            [ 'tenPhim' => 'Kiếm khách', 'poster' => 'posterkk.jpg', 'theLoai' => 'Hành động', 'thoiLuong' => '101 phút', 'doTuoi' => '18+', 'noiDung' => 'Phóng tác một sự kiện có thật trong lịch sử Hàn Quốc, bộ phim lấy bối cảnh năm 1623 vào thời điểm khi Gwanghae, vị vua thứ 15 của Joseon, bị phế ngôi. Là cấm vệ quân và cũng là kiếm khách lừng lẫy nhất lúc bấy giờ, Tae-yul bắt buộc phải lẩn trốn và mai danh ẩn tích. Trong lúc đó, đất nước Joseon lâm vào cảnh loạn lạc và phải gánh chịu sự hà hiếp của nhà Thanh. Theo một yêu sách vô lý của sứ giả, con gái của Tae-yul là Tae-ok bị bắt làm cống phẩm cho nhà Thanh. Vì cứu con gái, Tae-yul đành phải một lần nữa rút kiếm và đối đầu với đội quân tinh nhuệ của tay sứ giả.', 'daoDien' => 'CHOI Jae-hoon', 'trailer' => 'https://www.youtube.com/watch?v=Dte6ghDPQaY&feature=emb_logo&ab_channel=CGVCinemasVietnam'],
            [ 'tenPhim' => 'Sài Gòn trong cơn mưa', 'poster' => 'postersgtcm.jpg', 'theLoai' => 'Tình cảm', 'thoiLuong' => '105 phút', 'doTuoi' => '16+', 'noiDung' => '\'Sài Gòn Trong Cơn Mưa\' là câu chuyện về tình yêu & ước mơ của những người trẻ tứ xứ tìm thấy nhau giữa Sài Gòn và rồi lạc mất nhau cũng ở giữa Sài Gòn. Còn bạn? Liệu đã gặp được ‘thanh xuân’ của mình dưới cơn mưa đầu mùa nào hay chưa?', 'daoDien' => 'Lê Minh Hoàng', 'trailer' => 'https://www.youtube.com/watch?v=NFKVh-oJmSc&feature=emb_logo&ab_channel=CGVCinemasVietnam'],
            [ 'tenPhim' => 'Fate/Stay Night', 'poster' => 'posterfsn.jpg', 'theLoai' => 'Hoạt hình', 'thoiLuong' => '122 phút', 'doTuoi' => '13+', 'noiDung' => 'Fate/Stay Night - series quá quen thuộc của dòng phim Anime Nhật Bản chính thức trở lại màn ảnh rộng với phần 3 - Fate/Stay Night Heaven\'s Feel III. Spring Song. Ở phần này, câu chuyện không chỉ xoay quanh những cuộc chiến đấu đầy mạnh mẽ, khốc liệt mà còn đi sâu hơn vào mối quan hệ giữa các nhân vật. Dần đi đến hồi kết, cuộc đại chiến Chén Thánh sẽ được khép lại như thế nào? Mùa xuân của Sakura và Shirou liệu có đến ấm áp như họ hằng mong đợi?', 'daoDien' => 'Tomonori Sudo', 'trailer' => 'https://www.youtube.com/watch?v=siGp9_nMS3Q&feature=emb_logo&ab_channel=CGVCinemasVietnam'],
            [ 'tenPhim' => 'Thanh âm trong mắt em', 'poster' => 'postertatme.jpg', 'theLoai' => 'Tình cảm', 'thoiLuong' => '123 phút', 'doTuoi' => '16+', 'noiDung' => 'Sau tai nạn bất ngờ cướp đi gia đình và thị lực, Akari trở thành cô gái mạnh mẽ luôn tìm niềm vui sống từ những điều bình dị. Một lần tình cờ, cô gặp và quen biết Rui - một cựu võ sỹ quyền anh luôn chịu đựng bóng tối từ quá khứ. Nụ cười của Akari khiến Rui thay đổi. Khi họ nhận ra tình cảm đặc biệt dành cho nhau cũng là lúc Rui biết tai nạn trong quá khứ của Akari có liên quan đến anh. Liệu định mệnh sẽ chở che hay tiếp tục thử thách cả hai?', 'daoDien' => 'Takahiro Miki', 'trailer' => 'https://www.youtube.com/watch?v=BmfbFSqC7Mk&feature=emb_logo&ab_channel=CGVCinemasVietnam'],
            [ 'tenPhim' => 'Thang máy', 'poster' => 'postertm.jpg', 'theLoai' => 'Kinh dị', 'thoiLuong' => '80 phút', 'doTuoi' => '18+', 'noiDung' => 'Thang Máy là câu chuyện kỳ bí xảy ra với những cô gái trẻ khi đi trong thang máy một mình. Trong phim, bộ ba Trang – Ngọc và Jina là một hội bạn thân. Mọi chuyện bắt đầu khi Jina và Ngọc lần lượt mất tích sau khi tham gia vào trò chơi livestream trong thang máy. Kể từ đó, Trang bị ám ảnh tâm lý và không dám bước vào thang máy. Nhưng bằng mọi giá phải cứu bạn của mình, đón chờ xem Trang sẽ hành động như thế nào trong Thang Máy vào ngày 30.10.2020.', 'daoDien' => 'Peter Mourougaya', 'trailer' => 'https://www.youtube.com/watch?v=GTlQ9nx8vNw&feature=emb_logo&ab_channel=CGVCinemasVietnam'],
            [ 'tenPhim' => 'Ranh giới quỷ', 'poster' => 'posterrgq.jpg', 'theLoai' => 'Kinh dị', 'thoiLuong' => '87 phút', 'doTuoi' => '16+', 'noiDung' => 'Dựa trên một sự kiện có thật ở Thụy Điển, Ranh Giới Quỷ theo chân một gia đình chuyển đến ngôi nhà mới heo hút. Sống trong tình yêu thương của bố mẹ nhưng cậu bé Lucas liên tục thấy những ảo ảnh kỳ quái. Hoá ra có một thế lực tà ác đáng sợ đang âm mưu bắt giữ cậu bé lên gác mái một lần và mãi mãi... Liệu người mẹ Shirin có thể giúp con trai mình thoát ra khỏi nanh vuốt đáng sợ của quỷ dữ?', 'daoDien' => 'Tord Danielsson, Oskar Mellander', 'trailer' => 'https://www.youtube.com/watch?v=0wGDpS7OD60&feature=emb_logo&ab_channel=CGVCinemasVietnam'],
            [ 'tenPhim' => 'Những kẻ vô cảm', 'poster' => 'posternkvc.jpg', 'theLoai' => 'Kinh dị', 'thoiLuong' => '85 phút', 'doTuoi' => '18+', 'noiDung' => 'Một cô gái trẻ tên Caitlin Kramer đã vô tình chứng kiến vụ bạo hành một người đàn ông trong công viên. Vì quá sợ hãi trước kẻ bạo hành, cô và những nhân chứng khác đã không can thiệp và người đàn ông đó đã thiệt mạng sau khi bị đánh đập dã man. Sau sư việc, những nhân chứng của buổi hôm đó dần dần bị sát hại. Bản thân Caitlin cũng trải qua những sự việc kì quái, như thể có ai đó muốn trả thù cô vì đã làm lơ trước vụ bạo hành người đàn ông kia. Liệu Caitilin phải làm gì để thoát khỏi sự truy sát vô hình này?', 'daoDien' => 'Jeffrey Reddick', 'trailer' => 'https://www.youtube.com/watch?v=i2uszQvrV1o&feature=emb_logo&ab_channel=CGVCinemasVietnam'],
            [ 'tenPhim' => 'Ngạ quỷ: tiếng thét đồng gió hú', 'poster' => 'posternq.jpg', 'theLoai' => 'Hài hước', 'thoiLuong' => '112 phút', 'doTuoi' => '18+', 'noiDung' => 'Trung úy Satjathorn bất đắc dĩ phải nhận nhiệm vụ đi phá án tại ngôi làng TungMhaHon. Vụ án được đặc biệt quan tâm bởi có nhiều tình tiết bí hiểm, khó lý giải. Kuim – một anh nông dân người làng – tình nguyện hộ tống Satjathorn trong suốt chuyến điều tra bởi anh cũng muốn nhân cơ hội này trở về làng gặp người thương – Vhung. Ngôi làng vốn yên bình vào ban ngày lại trở nên vô cùng rùng rợn vào ban đêm. Hàng loạt tin đồn và sự kiện bất thường xảy ra với đội điều tra. Liệu cảnh sát Satjathorn có thể tìm ra sự thật và đưa tất cả thoát khỏi ngôi làng ma ám?', 'daoDien' => 'Chalerm Wongphim', 'trailer' => 'https://www.youtube.com/watch?v=bJSCP7ZLxzA&feature=emb_logo&ab_channel=CGVCinemasVietnam'],
            [ 'tenPhim' => 'Kẻ săn mộ', 'poster' => 'posterksm.jpg', 'theLoai' => 'Phiêu lưu', 'thoiLuong' => '115 phút', 'doTuoi' => '16+', 'noiDung' => 'Kang Dong-goo (Lee Je Hoon) là một thiên tài săn mộ khi có thể tìm ra kho báu chỉ bằng cách ngửi mùi đất. Cùng với các đồng là đội là tiến sĩ Jones (Jo Woo Jin) - chuyên gia nghiên cứu tranh cổ mộ, và Sabdari (Lim Won Hee) - huyền thoại đào mộ, Kang Dong-goo lập thành một bộ ba hoàn hảo cùng thực hiện những phi vụ cướp mộ đầy nguy hiểm và ly kỳ. Tài năng của Dong-goo đã lọt vào tầm ngắm của Yoon Sae-hee (Shin Hae Sun) - người quản lý cấp cao của Viện trưng bày cổ vật. Cô đưa ra đề nghị hấp dẫn mời nhóm của Dong-goo hợp tác trong phi vụ tìm kiếm một kho báu thời cổ đại.', 'daoDien' => 'Park Jeong-bae', 'trailer' => 'https://www.youtube.com/watch?v=pnw1_qbmsMw&feature=emb_logo&ab_channel=CGVCinemasVietnam'],
            [ 'tenPhim' => 'Free Guy', 'poster' => 'posterfg.jpg', 'theLoai' => 'Hành động', 'thoiLuong' => '156 phút', 'doTuoi' => '18+', 'noiDung' => 'Guy - Nhân viên giao dịch ngân hàng, phát hiện anh ấy thực chất là người chơi nền trong trò chơi điện tử thế giới mở. Guy quyết định trở thành người anh hùng và viết lại câu chuyện của chính mình. Giờ đây, trong một thế giới không còn giới hạn, anh ấy quyết định trở thành người giải cứu thế giới, theo cách của chính mình.', 'daoDien' => 'Shawn Levy', 'trailer' => 'https://www.youtube.com/watch?v=Rfk-vksCpEY&feature=emb_logo&ab_channel=CGVCinemasVietnam'],
            [ 'tenPhim' => 'Chị mười ba', 'poster' => 'postercmb.jpg', 'theLoai' => 'Hành động', 'thoiLuong' => '96 phút', 'doTuoi' => '16+', 'noiDung' => 'Chị Mười Ba đưa Kẽm Gai, tay đàn em cũ vừa mới ra tù, lên Đà Lạt để làm việc cho tiệm Gara của mình. Tại đây, Kẽm Gai dường như đã tìm lại được sự bình yên và hạnh phúc. Tuy vậy, anh sớm trở thành đối tượng bị tình nghi giết hại Đức Mát - em trai của đại ca Thắng Khùng khét tiếng đất Đà Lạt - và phải trốn chạy. Với thời hạn chỉ ba ngày, liệu Chị Mười Ba có minh oan được cho Kẽm Gai và cứu anh em An Cư Nghĩa Đoàn khỏi mối đe doạ mới? Liệu có bí mật khủng khiếp nào khác đang được che giấu? Tất cả sẽ được hé lộ vào ngày 27/03/2020.', 'daoDien' => 'Tô Gia Tuấn, Khương Ngọc', 'trailer' => 'https://www.youtube.com/watch?v=4icB4gSPaFY&ab_channel=GalaxyStudio']
        ];
        Movie::insert($data);
    }
}
