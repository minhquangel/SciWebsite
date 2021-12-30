<?php

use Illuminate\Database\Seeder;
use App\Repositories\BlockRepository;
use App\Models\Question;
use App\Models\Answer;

class QASeeder extends Seeder
{
    private $blockRepository;

    public function __construct(
        BlockRepository $blockRepository
    ) {
        $this->blockRepository = $blockRepository;
    }

    public function run()
    {
        $qaData = [
            [
                'block_code' => 'B1',
                'code' => 'Q83',
                'content' => 'Đây có phải lần đầu tiên bạn xin visa đi Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Đúng',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Sai',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B1',
                'code' => 'Q1',
                'content' => 'Bạn xin visa loại gì?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Visa sinh viên(F1/J1)',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Du lịch/Công tác (B1/B2)',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B1',
                'code' => 'Q79',
                'content' => 'Bạn đã bao giờ xin visa Mỹ và bị từ chối chưa?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Đã từng',
                        'score' => -25
                    ],
                    [
                        'code' => 2,
                        'content' => 'Chưa bao giờ',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B1',
                'code' => 'Q81',
                'content' => 'Bạn đã bao giờ bị trục xuất hoặc cấm nhập cảnh vào Mỹ, hoặc bị thu hồi visa?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Đã từng',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Chưa bao giờ',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B1',
                'code' => 'Q80',
                'content' => 'Bao lâu trước đây?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => '1 năm hoặc ít hơn',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => '2-3 năm trước đây',
                        'score' => 5
                    ],
                    [
                        'code' => 3,
                        'content' => '4-5 năm trước đây',
                        'score' => 15
                    ],
                    [
                        'code' => 4,
                        'content' => 'Hơn 5 năm trước',
                        'score' => 20
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q9',
                'content' => 'Bạn đến Mỹ để đi du lịch hay công tác?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Công tác',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Du lịch',
                        'score' => 0
                    ],
                    [
                        'code' => 3,
                        'content' => 'Cả hai',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q44',
                'content' => 'Bạn bao nhiêu tuổi?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => '0-17 tuổi',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => '18-35 tuổi',
                        'score' => -10
                    ],
                    [
                        'code' => 3,
                        'content' => '36-55 tuổi',
                        'score' => -10
                    ],
                    [
                        'code' => 4,
                        'content' => '55-65 tuổi',
                        'score' => 50
                    ],
                    [
                        'code' => 5,
                        'content' => '65+ tuổi',
                        'score' => 70
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q10',
                'content' => 'Bạn sẽ đi Mỹ trong bao lâu?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => '1-5 ngày',
                        'score' => -5
                    ],
                    [
                        'code' => 2,
                        'content' => '6 ngày - 3 tuần',
                        'score' => 0
                    ],
                    [
                        'code' => 3,
                        'content' => '1-2 tháng',
                        'score' => -10
                    ],
                    [
                        'code' => 4,
                        'content' => 'hơn 2 tháng',
                        'score' => -20
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q53',
                'content' => 'Bạn đang làm gì?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Sinh viên',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Thất nghiệp',
                        'score' => -25
                    ],
                    [
                        'code' => 3,
                        'content' => 'Kinh doanh/bất động sản',
                        'score' => -15
                    ],
                    [
                        'code' => 4,
                        'content' => 'Nông nghiệp',
                        'score' => -10
                    ],
                    [
                        'code' => 5,
                        'content' => 'Các ngành sản xuất/May mặc/Dệt',
                        'score' => -5
                    ],
                    [
                        'code' => 6,
                        'content' => 'Làm cho chính phủ',
                        'score' => 35
                    ],
                    [
                        'code' => 7,
                        'content' => 'Làm cho một công ty/tổ chức nhà nước',
                        'score' => 30
                    ],
                    [
                        'code' => 8,
                        'content' => 'Xây dựng',
                        'score' => -15
                    ],
                    [
                        'code' => 9,
                        'content' => 'Tài chính',
                        'score' => 20
                    ],
                    [
                        'code' => 10,
                        'content' => 'Công nghệ',
                        'score' => 20
                    ],
                    [
                        'code' => 11,
                        'content' => 'Chăm sóc sức khỏe',
                        'score' => 20
                    ],
                    [
                        'code' => 12,
                        'content' => 'Giáo dục',
                        'score' => 15
                    ],
                    [
                        'code' => 13,
                        'content' => 'Đã nghỉ hưu',
                        'score' => 0
                    ],
                    [
                        'code' => 14,
                        'content' => 'Khác',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q77',
                'content' => 'Cha của bạn làm nghề gì?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Sinh viên',
                        'score' => -5
                    ],
                    [
                        'code' => 2,
                        'content' => 'Thất nghiệp',
                        'score' => -12
                    ],
                    [
                        'code' => 3,
                        'content' => 'Kinh doanh/Bất động sản',
                        'score' => -7
                    ],
                    [
                        'code' => 4,
                        'content' => 'Nông nghiệp',
                        'score' => -7
                    ],
                    [
                        'code' => 5,
                        'content' => 'Các ngành sản xuất/May mặc/Dệt',
                        'score' => -2
                    ],
                    [
                        'code' => 6,
                        'content' => 'Làm cho chính phủ',
                        'score' => 17
                    ],
                    [
                        'code' => 7,
                        'content' => 'Làm cho công ty/tổ chức nhà nước',
                        'score' => 15
                    ],
                    [
                        'code' => 8,
                        'content' => 'Xây dựng',
                        'score' => -7
                    ],
                    [
                        'code' => 9,
                        'content' => 'Tài chính',
                        'score' => 10
                    ],
                    [
                        'code' => 10,
                        'content' => 'Công nghệ',
                        'score' => 10
                    ],
                    [
                        'code' => 11,
                        'content' => 'Chăm sóc sức khỏe',
                        'score' => 10
                    ],
                    [
                        'code' => 12,
                        'content' => 'Giáo dục',
                        'score' => 7
                    ],
                    [
                        'code' => 13,
                        'content' => 'Đã nghỉ hưu',
                        'score' => 0
                    ],
                    [
                        'code' => 14,
                        'content' => 'Khác',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q78',
                'content' => 'Mẹ của bạn làm nghề gì?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Sinh viên',
                        'score' => -5
                    ],
                    [
                        'code' => 2,
                        'content' => 'Thất nghiệp',
                        'score' => -12
                    ],
                    [
                        'code' => 3,
                        'content' => 'Doanh nghiệp cá nhân/Bất động sản',
                        'score' => -7
                    ],
                    [
                        'code' => 4,
                        'content' => 'Nông nghiệp',
                        'score' => -7
                    ],
                    [
                        'code' => 5,
                        'content' => 'Các ngành sản xuất/May mặc/Dệt',
                        'score' => -2
                    ],
                    [
                        'code' => 6,
                        'content' => 'Làm cho chính phủ',
                        'score' => 17
                    ],
                    [
                        'code' => 7,
                        'content' => 'Làm cho công ty/doanh nghiệp nhà nước',
                        'score' => 15
                    ],
                    [
                        'code' => 8,
                        'content' => 'Xây dựng',
                        'score' => -7
                    ],
                    [
                        'code' => 9,
                        'content' => 'Tài chính',
                        'score' => 10
                    ],
                    [
                        'code' => 10,
                        'content' => 'Công nghệ',
                        'score' => 10
                    ],
                    [
                        'code' => 11,
                        'content' => 'Chăm sóc sức khỏe',
                        'score' => 10
                    ],
                    [
                        'code' => 12,
                        'content' => 'Giáo dục',
                        'score' => 7
                    ],
                    [
                        'code' => 13,
                        'content' => 'Đã nghỉ hưu',
                        'score' => 0
                    ],
                    [
                        'code' => 14,
                        'content' => 'Khác',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q60',
                'content' => 'Quy mô công ty của bạn?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => '1-10 nhân viên',
                        'score' => -10
                    ],
                    [
                        'code' => 2,
                        'content' => '11-50 nhân viên',
                        'score' => -5
                    ],
                    [
                        'code' => 3,
                        'content' => '51-100 nhân viên',
                        'score' => 0
                    ],
                    [
                        'code' => 4,
                        'content' => '101-500 nhân viên',
                        'score' => 3
                    ],
                    [
                        'code' => 5,
                        'content' => '500+ nhân viên',
                        'score' => 5
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q63',
                'content' => 'Bạn quản lý bao nhiêu nhân viên?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => '1-10 nhân viên',
                        'score' => 2
                    ],
                    [
                        'code' => 2,
                        'content' => '11-50 nhân viên',
                        'score' => 3
                    ],
                    [
                        'code' => 3,
                        'content' => '51-100 nhân viên',
                        'score' => 5
                    ],
                    [
                        'code' => 4,
                        'content' => '101-500 nhân viên',
                        'score' => 7
                    ],
                    [
                        'code' => 5,
                        'content' => '500+ nhân viên',
                        'score' => 10
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q55',
                'content' => 'Bạn có hộ chiếu công vụ hoặc hộ chiếu ngoại giao không?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => 40
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q56',
                'content' => 'Bạn làm ở mức nào trong chính phủ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Trung ương',
                        'score' => 25
                    ],
                    [
                        'code' => 2,
                        'content' => 'Tỉnh',
                        'score' => 15
                    ],
                    [
                        'code' => 3,
                        'content' => 'Thành phố hoặc thấp hơn',
                        'score' => 10
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q54',
                'content' => 'Bạn có đang làm cho một công ty đa quốc gia không?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => 25
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q58',
                'content' => 'Bạn là bác sĩ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Đúng thế',
                        'score' => 10
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q59',
                'content' => 'Bạn có phải bác sĩ đông y (châm cứu, giúp bệnh nhân sử dụng thảo dược, ...)?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Đúng',
                        'score' => -10
                    ],
                    [
                        'code' => 2,
                        'content' => 'Sai',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q45',
                'content' => 'Tình trạng hôn nhân của bạn?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Độc thân',
                        'score' => -5
                    ],
                    [
                        'code' => 2,
                        'content' => 'Đã kết hôn',
                        'score' => 10
                    ],
                    [
                        'code' => 3,
                        'content' => 'Li hôn',
                        'score' => -10
                    ],
                    [
                        'code' => 4,
                        'content' => 'Góa phụ',
                        'score' => 5
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q52',
                'content' => 'Bạn đã li hôn bao nhiêu lần?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 1,
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 2,
                        'score' => -5
                    ],
                    [
                        'code' => 3,
                        'content' => '3 hoặc hơn',
                        'score' => -15
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q46',
                'content' => 'Bạn đã có con chưa?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Rồi',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Chưa',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q47',
                'content' => 'Bao nhiêu trong số các con cái của bạn sống ở Việt Nam?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 0,
                        'score' => -5
                    ],
                    [
                        'code' => 2,
                        'content' => 1,
                        'score' => 5
                    ],
                    [
                        'code' => 3,
                        'content' => 2,
                        'score' => 7
                    ],
                    [
                        'code' => 4,
                        'content' => '3 hoặc hơn',
                        'score' => 10
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q48',
                'content' => 'Bao nhiêu trong số các con cái của bạn sống ở Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 0,
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 1,
                        'score' => -10
                    ],
                    [
                        'code' => 3,
                        'content' => 2,
                        'score' => -15
                    ],
                    [
                        'code' => 4,
                        'content' => '3 hoặc hơn',
                        'score' => -20
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q50',
                'content' => 'Họ có đang học hoặc làm việc hợp pháp ở Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => 30
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => -30
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q51',
                'content' => 'Có phải họ được nhận nuôi bởi họ hàng bên Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Đúng',
                        'score' => -50
                    ],
                    [
                        'code' => 2,
                        'content' => 'Sai',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q49',
                'content' => 'Bao nhiêu trong số các con cái của bạn sống ở các nước khác (không kể Mỹ)?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 0,
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 1,
                        'score' => 0
                    ],
                    [
                        'code' => 3,
                        'content' => 2,
                        'score' => 0
                    ],
                    [
                        'code' => 4,
                        'content' => '3 hoặc hơn',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q25',
                'content' => 'Bạn đánh giá khả năng tiếng Anh của bạn thế nào?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Không nói được tiếng Anh',
                        'score' => -30
                    ],
                    [
                        'code' => 2,
                        'content' => 'Khó khăn trong giao tiếp tiếng Anh thông thường',
                        'score' => -10
                    ],
                    [
                        'code' => 3,
                        'content' => 'Có thể giao tiếp ở mức độ thông thường, trong những cuộc hội thoại hàng ngày',
                        'score' => 10
                    ],
                    [
                        'code' => 4,
                        'content' => 'Dễ dàng nói tiếng Anh trong giao tiếp hàng ngày',
                        'score' => 20
                    ],
                    [
                        'code' => 5,
                        'content' => 'Gần như người bản xứ',
                        'score' => 30
                    ]
                ]
            ],
            [
                'block_code' => 'B2',
                'code' => 'Q27',
                'content' => 'Bạn đến từ tỉnh/thành phố nào?',
                'type' => 2,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'TP HCM',
                        'score' => 10
                    ],
                    [
                        'code' => 2,
                        'content' => 'Hà Nội',
                        'score' => 20
                    ],
                    [
                        'code' => 3,
                        'content' => 'Hải Phòng',
                        'score' => -15
                    ],
                    [
                        'code' => 4,
                        'content' => 'Đà Nẵng',
                        'score' => -15
                    ],
                    [
                        'code' => 5,
                        'content' => 'Cần Thơ',
                        'score' => -15
                    ],
                    [
                        'code' => 6,
                        'content' => 'An Giang',
                        'score' => -15
                    ],
                    [
                        'code' => 7,
                        'content' => 'Bà Rịa - Vũng Tàu',
                        'score' => -15
                    ],
                    [
                        'code' => 8,
                        'content' => 'Bắc Giang',
                        'score' => -15
                    ],
                    [
                        'code' => 9,
                        'content' => 'Bắc Kạn',
                        'score' => -15
                    ],
                    [
                        'code' => 10,
                        'content' => 'Bạc Liêu',
                        'score' => -15
                    ],
                    [
                        'code' => 11,
                        'content' => 'Bắc Ninh',
                        'score' => -15
                    ],
                    [
                        'code' => 12,
                        'content' => 'Bến Tre',
                        'score' => -15
                    ],
                    [
                        'code' => 13,
                        'content' => 'Bình Định',
                        'score' => -15
                    ],
                    [
                        'code' => 14,
                        'content' => 'Bình Dương',
                        'score' => -15
                    ],
                    [
                        'code' => 15,
                        'content' => 'Bình Phước',
                        'score' => -15
                    ],
                    [
                        'code' => 16,
                        'content' => 'Bình Thuận',
                        'score' => -15
                    ],
                    [
                        'code' => 17,
                        'content' => 'Cà Mau',
                        'score' => -15
                    ],
                    [
                        'code' => 18,
                        'content' => 'Cao Bằng',
                        'score' => -15
                    ],
                    [
                        'code' => 19,
                        'content' => 'Đắk Lắk',
                        'score' => -15
                    ],
                    [
                        'code' => 20,
                        'content' => 'Đắk Nông',
                        'score' => -15
                    ],
                    [
                        'code' => 21,
                        'content' => 'Điện Biên',
                        'score' => -15
                    ],
                    [
                        'code' => 22,
                        'content' => 'Đồng Nai',
                        'score' => -15
                    ],
                    [
                        'code' => 23,
                        'content' => 'Đồng Tháp',
                        'score' => -15
                    ],
                    [
                        'code' => 24,
                        'content' => 'Gia Lai',
                        'score' => -15
                    ],
                    [
                        'code' => 25,
                        'content' => 'Hà Giang',
                        'score' => -15
                    ],
                    [
                        'code' => 26,
                        'content' => 'Hà Nam',
                        'score' => -15
                    ],
                    [
                        'code' => 27,
                        'content' => 'Hà Tĩnh',
                        'score' => -15
                    ],
                    [
                        'code' => 28,
                        'content' => 'Hải Dương',
                        'score' => -15
                    ],
                    [
                        'code' => 29,
                        'content' => 'Hậu Giang',
                        'score' => -15
                    ],
                    [
                        'code' => 30,
                        'content' => 'Hòa Bình',
                        'score' => -15
                    ],
                    [
                        'code' => 31,
                        'content' => 'Hưng Yên',
                        'score' => -15
                    ],
                    [
                        'code' => 32,
                        'content' => 'Khánh Hòa',
                        'score' => -15
                    ],
                    [
                        'code' => 33,
                        'content' => 'Kiên Giang',
                        'score' => -15
                    ],
                    [
                        'code' => 34,
                        'content' => 'Kon Tum',
                        'score' => -15
                    ],
                    [
                        'code' => 35,
                        'content' => 'Lai Châu',
                        'score' => -15
                    ],
                    [
                        'code' => 36,
                        'content' => 'Lâm Đồng',
                        'score' => -15
                    ],
                    [
                        'code' => 37,
                        'content' => 'Lạng Sơn',
                        'score' => -15
                    ],
                    [
                        'code' => 38,
                        'content' => 'Lào Cai',
                        'score' => -15
                    ],
                    [
                        'code' => 39,
                        'content' => 'Long An',
                        'score' => -15
                    ],
                    [
                        'code' => 40,
                        'content' => 'Nam Định',
                        'score' => -15
                    ],
                    [
                        'code' => 41,
                        'content' => 'Nghệ An',
                        'score' => -15
                    ],
                    [
                        'code' => 42,
                        'content' => 'Ninh Bình',
                        'score' => -15
                    ],
                    [
                        'code' => 43,
                        'content' => 'Ninh Thuận',
                        'score' => -15
                    ],
                    [
                        'code' => 44,
                        'content' => 'Phú Thọ',
                        'score' => -15
                    ],
                    [
                        'code' => 45,
                        'content' => 'Quảng Bình',
                        'score' => -15
                    ],
                    [
                        'code' => 46,
                        'content' => 'Quảng Nam',
                        'score' => -15
                    ],
                    [
                        'code' => 47,
                        'content' => 'Quảng Ngãi',
                        'score' => -15
                    ],
                    [
                        'code' => 48,
                        'content' => 'Quảng Ninh',
                        'score' => -15
                    ],
                    [
                        'code' => 49,
                        'content' => 'Quảng Trị',
                        'score' => -15
                    ],
                    [
                        'code' => 50,
                        'content' => 'Sóc Trăng',
                        'score' => -15
                    ],
                    [
                        'code' => 51,
                        'content' => 'Sơn La',
                        'score' => -15
                    ],
                    [
                        'code' => 52,
                        'content' => 'Tây Ninh',
                        'score' => -15
                    ],
                    [
                        'code' => 53,
                        'content' => 'Thái Bình',
                        'score' => -15
                    ],
                    [
                        'code' => 54,
                        'content' => 'Thái Nguyên',
                        'score' => -15
                    ],
                    [
                        'code' => 55,
                        'content' => 'Thanh Hóa',
                        'score' => -15
                    ],
                    [
                        'code' => 56,
                        'content' => 'Thừa Thiên Huế',
                        'score' => -15
                    ],
                    [
                        'code' => 57,
                        'content' => 'Tiền Giang',
                        'score' => -15
                    ],
                    [
                        'code' => 58,
                        'content' => 'Trà Vinh',
                        'score' => -15
                    ],
                    [
                        'code' => 59,
                        'content' => 'Tuyên Quang',
                        'score' => -15
                    ],
                    [
                        'code' => 60,
                        'content' => 'Vĩnh Long',
                        'score' => -15
                    ],
                    [
                        'code' => 61,
                        'content' => 'Vĩnh Phúc',
                        'score' => -15
                    ],
                    [
                        'code' => 62,
                        'content' => 'Yên Bái',
                        'score' => -15
                    ],
                    [
                        'code' => 63,
                        'content' => 'Phú Yên',
                        'score' => -15
                    ]
                ]
            ],
            [
                'block_code' => 'B3',
                'code' => 'Q18',
                'content' => 'Bạn đã đi nước ngoài lần nào chưa?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Rồi',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Chưa',
                        'score' => -10
                    ]
                ]
            ],
            [
                'block_code' => 'B3',
                'code' => 'Q20',
                'content' => 'Bạn đã đi đâu trước năm 2018?',
                'type' => 3,
                'sub_questions' => [
                    [
                        'content' => 'Mỹ',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 50
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 55
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 60
                            ]
                        ]
                    ],
                    [
                        'content' => 'Châu Âu (không bao gồm Nga)',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 15
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 25
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 35
                            ]
                        ]
                    ],
                    [
                        'content' => 'Canada',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 15
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 20
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 25
                            ]
                        ]
                    ],
                    [
                        'content' => 'Australia',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 10
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 10
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 15
                            ]
                        ]
                    ],
                    [
                        'content' => 'Đông Á (Nhật Bản/Hàn Quốc/Đài Loan)',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 10
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 10
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 15
                            ]
                        ]
                    ],
                    [
                        'content' => 'Liên Bang Nga',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 5
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 5
                            ]
                        ]
                    ],
                    [
                        'content' => 'Mỹ Latin',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 10
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 15
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 15
                            ]
                        ]
                    ],
                    [
                        'content' => 'Nam Á',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 7
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 9
                            ]
                        ]
                    ],
                    [
                        'content' => 'Trung Đông',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 7
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 9
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 11
                            ]
                        ]
                    ],
                    [
                        'content' => 'Đông Nam Á',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 7
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 9
                            ]
                        ]
                    ],
                    [
                        'content' => 'Châu Phi',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 10
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 10
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 10
                            ]
                        ]
                    ]
                ]
            ],
            [
                'block_code' => 'B3',
                'code' => 'Q31',
                'content' => 'Bạn đã từng đi học nước ngoài?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Đúng',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Sai',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B3',
                'code' => 'Q30',
                'content' => 'Bạn đã học ở đâu?',
                'type' => 3,
                'sub_questions' => [
                    [
                        'content' => 'Mỹ',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học cấp 2 hoặc cấp 3 (THCS/THPT)',
                                'score' => 50
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 50
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 50
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 15
                            ]
                        ]
                    ],
                    [
                        'content' => 'Châu Âu (không bao gồm Nga)',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học cấp 2 hoặc cấp 3 (THCS/THPT)',
                                'score' => 30
                            ],
                            [
                                'code' => 2,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 30
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 30
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 7
                            ]
                        ]
                    ],
                    [
                        'content' => 'Canada',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học cấp 2 hoặc cấp 3 (THCS/THPT)',
                                'score' => 30
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 30
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 30
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 7
                            ]
                        ]
                    ],
                    [
                        'content' => 'Australia',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học cấp 2 hoặc cấp 3 (THCS/THPT)',
                                'score' => 30
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 30
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 30
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 7
                            ]
                        ]
                    ],
                    [
                        'content' => 'Đông Á (Nhật Bản/Hàn Quốc/Đài Loan)',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học cấp 2 hoặc cấp 3 (THCS/THPT)',
                                'score' => 15
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 15
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 15
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 5
                            ]
                        ]
                    ],
                    [
                        'content' => 'Liên Bang Nga',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học cấp 2 hoặc cấp 3 (THCS/THPT)',
                                'score' => 10
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 10
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 10
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 5
                            ]
                        ]
                    ],
                    [
                        'content' => 'Mỹ Latin',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học cấp 2 hoặc cấp 3 (THCS/THPT)',
                                'score' => 10
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 10
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 10
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 5
                            ]
                        ]
                    ],
                    [
                        'content' => 'Nam Á',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học cấp 2 hoặc cấp 3 (THCS/THPT)',
                                'score' => 7
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 7
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 7
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 3
                            ]
                        ]
                    ],
                    [
                        'content' => 'Trung Đông',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học cấp 2 hoặc cấp 3 (THCS/THPT)',
                                'score' => 7
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 7
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 7
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 3
                            ]
                        ]
                    ],
                    [
                        'content' => 'Đông Nam Á',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học cấp 2 hoặc cấp 3 (THCS/THPT)',
                                'score' => 5
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 5
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 1
                            ]
                        ]
                    ],
                    [
                        'content' => 'Châu Phi',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học cấp 2 hoặc cấp 3 (THCS/THPT)',
                                'score' => 5
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 5
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 1
                            ]
                        ]
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q2',
                'content' => 'Bạn xin vào chương trình học nào?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Chương trình học ngôn ngữ - Language Program',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Học phổ thông (cấp 2 hoặc cấp 3)',
                        'score' => 0
                    ],
                    [
                        'code' => 3,
                        'content' => 'Chương trình liên kết',
                        'score' => 0
                    ],
                    [
                        'code' => 4,
                        'content' => 'Chương trình cử nhân',
                        'score' => 0
                    ],
                    [
                        'code' => 5,
                        'content' => 'Thạc sĩ hoặc cao hơn',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q90',
                'content' => 'Bạn có đang học tại Việt Nam không?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => -15
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q91',
                'content' => 'Trường đại học của bạn có chương trình trao đổi sinh viên với trường bạn dự định sẽ học ở Mỹ không?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => 25
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q88',
                'content' => 'Bạn học ở trường công hay trường tư?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Trường tư',
                        'score' => 20
                    ],
                    [
                        'code' => 2,
                        'content' => 'Trường công',
                        'score' => -10
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q89',
                'content' => 'Bạn dự định sẽ theo học trường công hay trường tư ở Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Trường tư',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Trường công',
                        'score' => -10
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q87',
                'content' => 'Trong khóa học học ngôn ngữ của bạn, bạn có được chấp nhận vào một chương trình khác sau khi hoàn thành khóa học ngôn ngữ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Không',
                        'score' => -50
                    ],
                    [
                        'code' => 2,
                        'content' => 'Có, tại một trường cao đẳng cộng đồng hoặc chương trình cấp bằng liên kết',
                        'score' => -35
                    ],
                    [
                        'code' => 3,
                        'content' => 'Có, tại một trường đại học, với một chương trình 4 năm',
                        'score' => 0
                    ],
                    [
                        'code' => 4,
                        'content' => 'Có, tại một khóa học thạc sĩ hoặc cao hơn.',
                        'score' => 20
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q28',
                'content' => 'Bạn đến từ tỉnh/thành phố nào?',
                'type' => 2,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'TP HCM',
                        'score' => 5
                    ],
                    [
                        'code' => 2,
                        'content' => 'Hà Nội',
                        'score' => 15
                    ],
                    [
                        'code' => 3,
                        'content' => 'Hải Phòng',
                        'score' => -5
                    ],
                    [
                        'code' => 4,
                        'content' => 'Đà Nẵng',
                        'score' => -5
                    ],
                    [
                        'code' => 5,
                        'content' => 'Cần Thơ',
                        'score' => -10
                    ],
                    [
                        'code' => 6,
                        'content' => 'An Giang',
                        'score' => -10
                    ],
                    [
                        'code' => 7,
                        'content' => 'Bà Rịa - Vũng Tàu',
                        'score' => -10
                    ],
                    [
                        'code' => 8,
                        'content' => 'Bắc Giang',
                        'score' => -10
                    ],
                    [
                        'code' => 9,
                        'content' => 'Bắc Kạn',
                        'score' => -10
                    ],
                    [
                        'code' => 10,
                        'content' => 'Bạc Liêu',
                        'score' => -10
                    ],
                    [
                        'code' => 11,
                        'content' => 'Bắc Ninh',
                        'score' => -10
                    ],
                    [
                        'code' => 12,
                        'content' => 'Bến Tre',
                        'score' => -10
                    ],
                    [
                        'code' => 13,
                        'content' => 'Bình Định',
                        'score' => -10
                    ],
                    [
                        'code' => 14,
                        'content' => 'Bình Dương',
                        'score' => -10
                    ],
                    [
                        'code' => 15,
                        'content' => 'Bình Phước',
                        'score' => -10
                    ],
                    [
                        'code' => 16,
                        'content' => 'Bình Thuận',
                        'score' => -10
                    ],
                    [
                        'code' => 17,
                        'content' => 'Cà Mau',
                        'score' => -10
                    ],
                    [
                        'code' => 18,
                        'content' => 'Cao Bằng',
                        'score' => -10
                    ],
                    [
                        'code' => 19,
                        'content' => 'Đắk Lắk',
                        'score' => -10
                    ],
                    [
                        'code' => 20,
                        'content' => 'Đắk Nông',
                        'score' => -10
                    ],
                    [
                        'code' => 21,
                        'content' => 'Điện Biên',
                        'score' => -10
                    ],
                    [
                        'code' => 22,
                        'content' => 'Đồng Nai',
                        'score' => -10
                    ],
                    [
                        'code' => 23,
                        'content' => 'Đồng Tháp',
                        'score' => -10
                    ],
                    [
                        'code' => 24,
                        'content' => 'Gia Lai',
                        'score' => -10
                    ],
                    [
                        'code' => 25,
                        'content' => 'Hà Giang',
                        'score' => -10
                    ],
                    [
                        'code' => 26,
                        'content' => 'Hà Nam',
                        'score' => -10
                    ],
                    [
                        'code' => 27,
                        'content' => 'Hà Tĩnh',
                        'score' => -10
                    ],
                    [
                        'code' => 28,
                        'content' => 'Hải Dương',
                        'score' => -10
                    ],
                    [
                        'code' => 29,
                        'content' => 'Hậu Giang',
                        'score' => -10
                    ],
                    [
                        'code' => 30,
                        'content' => 'Hòa Bình',
                        'score' => -10
                    ],
                    [
                        'code' => 31,
                        'content' => 'Hưng Yên',
                        'score' => -10
                    ],
                    [
                        'code' => 32,
                        'content' => 'Khánh Hòa',
                        'score' => -10
                    ],
                    [
                        'code' => 33,
                        'content' => 'Kiên Giang',
                        'score' => -10
                    ],
                    [
                        'code' => 34,
                        'content' => 'Kon Tum',
                        'score' => -10
                    ],
                    [
                        'code' => 35,
                        'content' => 'Lai Châu',
                        'score' => -10
                    ],
                    [
                        'code' => 36,
                        'content' => 'Lâm Đồng',
                        'score' => -10
                    ],
                    [
                        'code' => 37,
                        'content' => 'Lạng Sơn',
                        'score' => -10
                    ],
                    [
                        'code' => 38,
                        'content' => 'Lào Cai',
                        'score' => -10
                    ],
                    [
                        'code' => 39,
                        'content' => 'Long An',
                        'score' => -10
                    ],
                    [
                        'code' => 40,
                        'content' => 'Nam Định',
                        'score' => -10
                    ],
                    [
                        'code' => 41,
                        'content' => 'Nghệ An',
                        'score' => -10
                    ],
                    [
                        'code' => 42,
                        'content' => 'Ninh Bình',
                        'score' => -10
                    ],
                    [
                        'code' => 43,
                        'content' => 'Ninh Thuận',
                        'score' => -10
                    ],
                    [
                        'code' => 44,
                        'content' => 'Phú Thọ',
                        'score' => -10
                    ],
                    [
                        'code' => 45,
                        'content' => 'Quảng Bình',
                        'score' => -10
                    ],
                    [
                        'code' => 46,
                        'content' => 'Quảng Nam',
                        'score' => -10
                    ],
                    [
                        'code' => 47,
                        'content' => 'Quảng Ngãi',
                        'score' => -10
                    ],
                    [
                        'code' => 48,
                        'content' => 'Quảng Ninh',
                        'score' => -10
                    ],
                    [
                        'code' => 49,
                        'content' => 'Quảng Trị',
                        'score' => -10
                    ],
                    [
                        'code' => 50,
                        'content' => 'Sóc Trăng',
                        'score' => -10
                    ],
                    [
                        'code' => 51,
                        'content' => 'Sơn La',
                        'score' => -10
                    ],
                    [
                        'code' => 52,
                        'content' => 'Tây Ninh',
                        'score' => -10
                    ],
                    [
                        'code' => 53,
                        'content' => 'Thái Bình',
                        'score' => -10
                    ],
                    [
                        'code' => 54,
                        'content' => 'Thái Nguyên',
                        'score' => -10
                    ],
                    [
                        'code' => 55,
                        'content' => 'Thanh Hóa',
                        'score' => -10
                    ],
                    [
                        'code' => 56,
                        'content' => 'Thừa Thiên Huế',
                        'score' => -10
                    ],
                    [
                        'code' => 57,
                        'content' => 'Tiền Giang',
                        'score' => -10
                    ],
                    [
                        'code' => 58,
                        'content' => 'Trà Vinh',
                        'score' => -10
                    ],
                    [
                        'code' => 59,
                        'content' => 'Tuyên Quang',
                        'score' => -10
                    ],
                    [
                        'code' => 60,
                        'content' => 'Vĩnh Long',
                        'score' => -10
                    ],
                    [
                        'code' => 61,
                        'content' => 'Vĩnh Phúc',
                        'score' => -10
                    ],
                    [
                        'code' => 62,
                        'content' => 'Yên Bái',
                        'score' => -10
                    ],
                    [
                        'code' => 63,
                        'content' => 'Phú Yên',
                        'score' => -10
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q3',
                'content' => 'Bạn có học bổng không?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q4',
                'content' => 'Học bổng của bạn là bao nhiêu (1 năm)?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => '$1-$9999',
                        'score' => 10
                    ],
                    [
                        'code' => 2,
                        'content' => '$10000-$19999',
                        'score' => 20
                    ],
                    [
                        'code' => 3,
                        'content' => '$20000-$29999',
                        'score' => 30
                    ],
                    [
                        'code' => 4,
                        'content' => '$30000+',
                        'score' => 40
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q13',
                'content' => 'Bạn sẽ sống ở đâu khi học ở Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Sẽ sống trong kí túc của trường (campus housing)',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Sẽ sống với một gia đình chủ nhà (host family)',
                        'score' => 0
                    ],
                    [
                        'code' => 3,
                        'content' => 'Sẽ sống với họ hàng hoặc bạn bè',
                        'score' => -10
                    ],
                    [
                        'code' => 4,
                        'content' => 'Sẽ sống trong một căn hộ thuê hoặc căn hộ của tôi',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q14',
                'content' => 'Có phải gia đình chủ nhà là người Việt Nam hoặc đến từ Việt Nam?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Đúng',
                        'score' => -10
                    ],
                    [
                        'code' => 2,
                        'content' => 'Sai',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B4',
                'code' => 'Q7',
                'content' => 'Bạn đánh giá khả năng tiếng Anh của bạn thế nào??',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Không nói được tiếng Anh',
                        'score' => -50
                    ],
                    [
                        'code' => 2,
                        'content' => 'Khó khăn trong giao tiếp tiếng Anh thông thường',
                        'score' => -30
                    ],
                    [
                        'code' => 3,
                        'content' => 'Có thể giao tiếp ở mức độ thông thường, trong những cuộc hội thoại hàng ngày',
                        'score' => 10
                    ],
                    [
                        'code' => 4,
                        'content' => 'Dễ dàng nói tiếng Anh trong giao tiếp hàng ngày',
                        'score' => 20
                    ],
                    [
                        'code' => 5,
                        'content' => 'Gần như người bản xứ',
                        'score' => 40
                    ]
                ]
            ],
            [
                'block_code' => 'B5',
                'code' => 'Q71',
                'content' => 'Bố mẹ của bạn làm nghề gì?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Sinh viên',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Thất nghiệp',
                        'score' => -25
                    ],
                    [
                        'code' => 3,
                        'content' => 'Kinh doanh/Bất động sản',
                        'score' => -15
                    ],
                    [
                        'code' => 4,
                        'content' => 'Nông nghiệp',
                        'score' => -15
                    ],
                    [
                        'code' => 5,
                        'content' => 'Sản xuất/May mặc/Dệt',
                        'score' => -5
                    ],
                    [
                        'code' => 6,
                        'content' => 'Làm cho chính phủ',
                        'score' => 30
                    ],
                    [
                        'code' => 7,
                        'content' => 'Làm cho công ty/tổ chức nhà nước',
                        'score' => 20
                    ],
                    [
                        'code' => 8,
                        'content' => 'Xây dựng',
                        'score' => -15
                    ],
                    [
                        'code' => 9,
                        'content' => 'Tài chính',
                        'score' => 15
                    ],
                    [
                        'code' => 10,
                        'content' => 'Công nghệ',
                        'score' => 10
                    ],
                    [
                        'code' => 11,
                        'content' => 'Chăm sóc sức khỏe',
                        'score' => 10
                    ],
                    [
                        'code' => 12,
                        'content' => 'Giáo dục',
                        'score' => 10
                    ],
                    [
                        'code' => 13,
                        'content' => 'Đã nghỉ hưu',
                        'score' => 0
                    ],
                    [
                        'code' => 14,
                        'content' => 'Khác',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B5',
                'code' => 'Q73',
                'content' => 'Họ đã từng đi nước ngoài chưa?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Đã từng',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Chưa',
                        'score' => -30
                    ]
                ]
            ],
            [
                'block_code' => 'B5',
                'code' => 'Q65',
                'content' => 'Họ đã đi đâu trước năm 2018?',
                'type' => 3,
                'sub_questions' => [
                    [
                        'content' => 'Mỹ',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 15
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 20
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 15
                            ]
                        ]
                    ],
                    [
                        'content' => 'Châu Âu (không bao gồm Nga)',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 7
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 10
                            ]
                        ]
                    ],
                    [
                        'content' => 'Canada',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 7
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 10
                            ]
                        ]
                    ],
                    [
                        'content' => 'Australia',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 10
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 15
                            ]
                        ]
                    ],
                    [
                        'content' => 'Đông Á (Nhật Bản/Hàn Quốc/Đài Loan)',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 4
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 6
                            ]
                        ]
                    ],
                    [
                        'content' => 'Liên Bang Nga',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 2
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 4
                            ]
                        ]
                    ],
                    [
                        'content' => 'Mỹ Latin',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 4
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 5
                            ]
                        ]
                    ],
                    [
                        'content' => 'Nam Á',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 2
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 4
                            ]
                        ]
                    ],
                    [
                        'content' => 'Trung Đông',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 2
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 4
                            ]
                        ]
                    ],
                    [
                        'content' => 'Đông Nam Á',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 1
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 2
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 3
                            ]
                        ]
                    ],
                    [
                        'content' => 'Châu Phi',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 2
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 4
                            ]
                        ]
                    ]
                ]
            ],
            [
                'block_code' => 'B5',
                'code' => 'Q64',
                'content' => 'Bạn đã từng đi nước ngoài?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Đã từng',
                        'score' => 2
                    ],
                    [
                        'code' => 2,
                        'content' => 'Chưa bao giờ',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B5',
                'code' => 'Q74',
                'content' => 'Bạn đi đâu trước năm 2018?',
                'type' => 3,
                'sub_questions' => [
                    [
                        'content' => 'Mỹ',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 10
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 15
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 20
                            ]
                        ]
                    ],
                    [
                        'content' => 'Châu Âu (không bao gồm Nga)',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 7
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 10
                            ]
                        ]
                    ],
                    [
                        'content' => 'Canada',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 7
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 10
                            ]
                        ]
                    ],
                    [
                        'content' => 'Australia',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 10
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 15
                            ]
                        ]
                    ],
                    [
                        'content' => 'Đông Á (Nhật Bản/Hàn Quốc/Đài Loan)',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 4
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 6
                            ]
                        ]
                    ],
                    [
                        'content' => 'Liên Bang Nga',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 2
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 4
                            ]
                        ]
                    ],
                    [
                        'content' => 'Mỹ Latin',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 4
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 5
                            ]
                        ]
                    ],
                    [
                        'content' => 'Nam Á',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 2
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 4
                            ]
                        ]
                    ],
                    [
                        'content' => 'Trung Đông',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 2
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 4
                            ]
                        ]
                    ],
                    [
                        'content' => 'Đông Nam Á',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 1
                            ],
                            [
                                'code' => 3,
                                'content' => '2 times',
                                'score' => 2
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 3
                            ]
                        ]
                    ],
                    [
                        'content' => 'Châu Phi',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Chưa bao giờ đi trước năm 2018',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => '1 lần',
                                'score' => 2
                            ],
                            [
                                'code' => 3,
                                'content' => '2 lần',
                                'score' => 3
                            ],
                            [
                                'code' => 4,
                                'content' => '3+ lần',
                                'score' => 4
                            ]
                        ]
                    ]
                ]
            ],
            [
                'block_code' => 'B5',
                'code' => 'Q66',
                'content' => 'Bạn đã từng học ở nước ngoài?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Chưa bao giờ',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B5',
                'code' => 'Q67',
                'content' => 'Bạn đã học ở đâu?',
                'type' => 3,
                'sub_questions' => [
                    [
                        'content' => 'Mỹ',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 20
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 30
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 40
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 15
                            ]
                        ]
                    ],
                    [
                        'content' => 'U.K',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 15
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 25
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 35
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 10
                            ]
                        ]
                    ],
                    [
                        'content' => 'Châu Âu (không bao gồm Nga)',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 7
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 13
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 13
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 7
                            ]
                        ]
                    ],
                    [
                        'content' => 'Canada',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 15
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 20
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 30
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 10
                            ]
                        ]
                    ],
                    [
                        'content' => 'Australia',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 13
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 17
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 25
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 10
                            ]
                        ]
                    ],
                    [
                        'content' => 'Đông Á (Nhật Bản/Hàn Quốc/Đài Loan)',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 7
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 10
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 15
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 5
                            ]
                        ]
                    ],
                    [
                        'content' => 'Liên Bang Nga',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 2
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 5
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 10
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 5
                            ]
                        ]
                    ],
                    [
                        'content' => 'Mỹ Latin',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 7
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 10
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 5
                            ]
                        ]
                    ],
                    [
                        'content' => 'Nam Á',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 3
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 5
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 0
                            ]
                        ]
                    ],
                    [
                        'content' => 'Trung Đông',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 3
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 5
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 0
                            ]
                        ]
                    ],
                    [
                        'content' => 'Đông Nam Á',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 3
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 5
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 0
                            ]
                        ]
                    ],
                    [
                        'content' => 'Châu Phi',
                        'answers' => [
                            [
                                'code' => 1,
                                'content' => 'Học phổ thông (cấp 2/cấp 3)',
                                'score' => 0
                            ],
                            [
                                'code' => 2,
                                'content' => 'Cao đẳng/Đại học',
                                'score' => 0
                            ],
                            [
                                'code' => 3,
                                'content' => 'Thạc sĩ hoặc cao hơn',
                                'score' => 5
                            ],
                            [
                                'code' => 4,
                                'content' => 'Khác',
                                'score' => 0
                            ]
                        ]
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q5',
                'content' => 'Bạn có họ hàng nào khác ngoài con/cháu (grandchildren) hiện đang sống ở Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => 5
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q86',
                'content' => 'Đó là họ hàng gì?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Bố mẹ/Dượng hoặc mẹ kế',
                        'score' => -25
                    ],
                    [
                        'code' => 2,
                        'content' => 'Anh chị em',
                        'score' => 0
                    ],
                    [
                        'code' => 3,
                        'content' => 'Cô/Chú/Bác',
                        'score' => -15
                    ],
                    [
                        'code' => 4,
                        'content' => 'Họ hàng khác',
                        'score' => -10
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q84',
                'content' => 'Có anh chị em nào của bạn thuộc diện Thường trú hợp pháp tại Mỹ (LPRs - Legal Permanent Residents) hoặc là công dân Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q33',
                'content' => 'Bố hoặc mẹ của bạn có thuộc diện Thường trú hợp pháp tại Mỹ LPRs (Legal Permanent Residents) hoặc là công dân Mỹ không?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q34',
                'content' => 'Có ai trong cô/chú/bác của bạn thuộc diện Thường trú hợp pháp (LPRs - Legal Permanent Residents) hoặc là công dân Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q35',
                'content' => 'Có ai trong số họ hàng khác của bạn thuộc diện Thường trú hợp pháp (LPRs - Legal Permanent Residents) hoặc là công dân Mỹ không?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Có',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Không',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q17',
                'content' => 'Họ có giấy Thường trú hợp pháp (LPR status) hoặc trở thành công dẫn Mỹ bằng cách nào?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Kết hôn với một công dân Mỹ',
                        'score' => -20
                    ],
                    [
                        'code' => 2,
                        'content' => 'Visa lao động',
                        'score' => 10
                    ],
                    [
                        'code' => 3,
                        'content' => 'Đơn xin nhập cư từ người thân',
                        'score' => -10
                    ],
                    [
                        'code' => 4,
                        'content' => 'Tôi không biết',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q32',
                'content' => 'Họ có giấy Thường trú hợp pháp (LPR status) hoặc trở thành công dẫn Mỹ bằng cách nào?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Kết hôn với một công dân Mỹ',
                        'score' => -15
                    ],
                    [
                        'code' => 2,
                        'content' => 'Visa lao động',
                        'score' => 10
                    ],
                    [
                        'code' => 3,
                        'content' => 'Đơn xin nhập cư từ người thân',
                        'score' => -5
                    ],
                    [
                        'code' => 4,
                        'content' => 'Tôi không biết',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q36',
                'content' => 'Họ có giấy Thường trú hợp pháp (LPR status) hoặc trở thành công dẫn Mỹ bằng cách nào?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Kết hôn với một công dân Mỹ',
                        'score' => -5
                    ],
                    [
                        'code' => 2,
                        'content' => 'Visa lao động',
                        'score' => 5
                    ],
                    [
                        'code' => 3,
                        'content' => 'Đơn xin nhập cư từ người thân',
                        'score' => -5
                    ],
                    [
                        'code' => 4,
                        'content' => 'Tôi không biết',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q37',
                'content' => 'Họ có giấy Thường trú hợp pháp (LPR status) hoặc trở thành công dẫn Mỹ bằng cách nào?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Kết hôn với một công dân Mỹ',
                        'score' => -5
                    ],
                    [
                        'code' => 2,
                        'content' => 'Visa lao động',
                        'score' => 5
                    ],
                    [
                        'code' => 3,
                        'content' => 'Đơn xin nhập cư từ người thân',
                        'score' => -5
                    ],
                    [
                        'code' => 4,
                        'content' => 'Tôi không biết',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q38',
                'content' => 'Anh/chị/em của bạn đang làm nghề gì?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Sinh viên',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Công việc không đòi hỏi bằng đại học/cao đẳng (nail - làm móng, phục vụ nhà hàng, giúp việc, ...).',
                        'score' => -15
                    ],
                    [
                        'code' => 3,
                        'content' => 'Công việc đòi hỏi bằng đại học/cao đẳng',
                        'score' => 15
                    ],
                    [
                        'code' => 4,
                        'content' => 'Nghỉ hưu',
                        'score' => 0
                    ],
                    [
                        'code' => 5,
                        'content' => 'Tôi không biết',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q42',
                'content' => 'Họ học chương trình nào?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Chương trình ngôn ngữ',
                        'score' => -10
                    ],
                    [
                        'code' => 2,
                        'content' => 'Phổ thông (cấp 2/cấp 3)',
                        'score' => 15
                    ],
                    [
                        'code' => 3,
                        'content' => 'Chương trình liên kết',
                        'score' => 5
                    ],
                    [
                        'code' => 4,
                        'content' => 'Chương trình cử nhân',
                        'score' => 15
                    ],
                    [
                        'code' => 5,
                        'content' => 'Thạc sĩ hoặc cao hơn',
                        'score' => 25
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q39',
                'content' => 'Bố mẹ bạn làm công việc gì gì ở Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Sinh viên',
                        'score' => -25
                    ],
                    [
                        'code' => 2,
                        'content' => 'Công việc không đòi hỏi bằng đại học/cao đẳng (nail - làm móng, phục vụ nhà hàng, giúp việc, ...).',
                        'score' => -25
                    ],
                    [
                        'code' => 3,
                        'content' => 'Công việc đòi hỏi bằng đại học/cao đẳng',
                        'score' => 10
                    ],
                    [
                        'code' => 4,
                        'content' => 'Nghỉ hưu',
                        'score' => 0
                    ],
                    [
                        'code' => 5,
                        'content' => 'Tôi không biết',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q40',
                'content' => 'Họ hàng của bạn làm công việc gì ở Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Sinh viên',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Công việc không đòi hỏi bằng đại học/cao đẳng (nail - làm móng, phục vụ nhà hàng, giúp việc, ...).',
                        'score' => -10
                    ],
                    [
                        'code' => 3,
                        'content' => 'Công việc đòi hỏi bằng đại học/cao đẳng',
                        'score' => 5
                    ],
                    [
                        'code' => 4,
                        'content' => 'Nghỉ hưu',
                        'score' => 0
                    ],
                    [
                        'code' => 5,
                        'content' => 'Tôi không biết',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q41',
                'content' => 'Họ hàng của bạn làm công việc gì ở Mỹ?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Sinh viên',
                        'score' => 0
                    ],
                    [
                        'code' => 2,
                        'content' => 'Công việc không đòi hỏi bằng đại học/cao đẳng (nail - làm móng, phục vụ nhà hàng, giúp việc, ...).',
                        'score' => -10
                    ],
                    [
                        'code' => 3,
                        'content' => 'Công việc đòi hỏi bằng đại học/cao đẳng',
                        'score' => 5
                    ],
                    [
                        'code' => 4,
                        'content' => 'Nghỉ hưu',
                        'score' => 0
                    ],
                    [
                        'code' => 5,
                        'content' => 'Tôi không biết',
                        'score' => 0
                    ]
                ]
            ],
            [
                'block_code' => 'B6',
                'code' => 'Q43',
                'content' => 'Họ học chương trình gì?',
                'type' => 1,
                'answers' => [
                    [
                        'code' => 1,
                        'content' => 'Chương trình ngôn ngữ',
                        'score' => -5
                    ],
                    [
                        'code' => 2,
                        'content' => 'Phổ thông (cấp 2/cấp 3)',
                        'score' => 0
                    ],
                    [
                        'code' => 3,
                        'content' => 'Chương trình học liên kết',
                        'score' => 0
                    ],
                    [
                        'code' => 4,
                        'content' => 'Chương trình cử nhân',
                        'score' => 3
                    ],
                    [
                        'code' => 5,
                        'content' => 'Thạc sĩ hoặc cao hơn',
                        'score' => 5
                    ]
                ]
            ]
        ];

        foreach ($qaData as $qa)
        {
            $block = $this->blockRepository->findWhere(['code' => $qa['block_code']])->first();
            $questionId = uniqid();
            Question::create([
                'id' => $questionId,
                'block_id' => $block->id,
                'code' => $qa['code'],
                'type' => $qa['type'],
                'content' => $qa['content']
            ]);

            if (array_key_exists('sub_questions', $qa))
            {
                foreach ($qa['sub_questions'] as $key => $subQuestion)
                {
                    $subQuestionId = uniqid();
                    Question::create([
                        'id' => $subQuestionId,
                        'block_id' => $block->id,
                        'parent_id' => $questionId,
                        'code' => $qa['code'] . '_' . $key,
                        'type' => 1,
                        'content' => $subQuestion['content']
                    ]);

                    foreach ($subQuestion['answers'] as $subQuestionAnswer)
                    {
                        Answer::create([
                            'id' => uniqid(),
                            'question_id' => $subQuestionId,
                            'code' => $subQuestionAnswer['code'],
                            'content' => $subQuestionAnswer['content'],
                            'score' => $subQuestionAnswer['score']
                        ]);
                    }
                }
            } else {
                foreach ($qa['answers'] as $answer)
                {
                    Answer::create([
                        'id' => uniqid(),
                        'question_id' => $questionId,
                        'code' => $answer['code'],
                        'content' => $answer['content'],
                        'score' => $answer['score']
                    ]);
                }
            }
        }
    }
}
