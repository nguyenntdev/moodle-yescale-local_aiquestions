<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     local_aiquestions
 * @category    string
 * @copyright   2023 Ruthy Salomon <ruthy.salomon@gmail.com> , Yedidia Klein <yedidia@openapp.co.il>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Basics.
$string['pluginname'] = 'YeScale AI tạo câu hỏi từ văn bản';
$string['pluginname_desc'] = 'Plugin này cho phép bạn tự động tạo câu hỏi từ văn bản bằng cách sử dụng AI ngôn ngữ (ví dụ: chatGPT).';
$string['pluginname_help'] = 'Sử dụng plugin này từ menu quản trị khóa học hoặc ngân hàng câu hỏi.';
$string['privacy:metadata'] = 'YeScale AI tạo câu hỏi từ văn bản không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['aiquestions'] = 'YeScale AI Câu hỏi';

// Settings page.
$string['provider'] = 'Nhà cung cấp GPT';
$string['providerdesc'] = 'Nhà cung cấp YeScale AI để tạo câu hỏi từ văn bản';
$string['openaikey'] = 'Khóa API YeScale';
$string['openaikeydesc'] = 'Bạn có thể lấy khóa API YeScale từ <a href="https://yescale.io">YeScale</a><br>
Chọn nút "+ Tạo Khóa Bí mật Mới" và sao chép khóa vào trường này.<br>
Lưu ý rằng bạn cần có tài khoản YeScale có cài đặt thanh toán để lấy khóa API.';
$string['model'] = 'Mô hình';
$string['model_desc'] = 'Mô hình ngôn ngữ để sử dụng. <a href="https://yescale.io/models">Thông tin thêm</a>.';
$string['presetname'] = 'Tên thiết lập sẵn';
$string['presetnamedesc'] = 'Tên sẽ được hiển thị cho người dùng';
$string['presetprimer'] = 'Mồi thiết lập sẵn';
$string['presetinstructions'] = 'Hướng dẫn thiết lập sẵn';
$string['presetexample'] = 'Ví dụ thiết lập sẵn';
$string['numoftries'] = '<b>{$a}</b> lần thử';
$string['numoftriesset'] = 'Số lần thử';
$string['numoftriesdesc'] = 'Số lần thử gửi đến YeScale';
$string['presets'] = 'Thiết lập sẵn';
$string['presetsdesc'] = 'Bạn có thể chỉ định tối đa 10 thiết lập sẵn mà người dùng có thể chọn trong khóa học của họ. Người dùng vẫn có thể chỉnh sửa thiết lập sẵn trước khi gửi chúng đến YeScale.';
$string['preset'] = 'Thiết lập sẵn';
$string['shareyourprompts'] = 'Bạn có thể tìm thêm ý tưởng prompt hoặc chia sẻ của bạn tại <a target="_blank" href="https://docs.moodle.org/402/en/AI_Text_to_questions_generator">trang Moodle Docs cho plugin này</a>.';

// Story form.
$string['category'] = 'Danh mục câu hỏi';
$string['category_help'] = 'Nếu lựa chọn danh mục trống, hãy mở ngân hàng câu hỏi cho khóa học này một lần.';
$string['addidentifier'] = 'Thêm tiền tố "GPT-created: " vào tên câu hỏi';
$string['editpreset'] = 'Chỉnh sửa thiết lập sẵn trước khi gửi đến AI';
$string['primer'] = 'Mồi';
$string['primer_help'] = 'Mồi là thông tin đầu tiên được gửi đến AI, chuẩn bị nó cho nhiệm vụ.';
$string['instructions'] = 'Hướng dẫn';
$string['instructions_help'] = 'Hướng dẫn cho AI biết phải làm gì.';
$string['example'] = 'Ví dụ';
$string['example_help'] = 'Ví dụ cho AI thấy một đầu ra mẫu, để làm rõ định dạng.';
$string['story'] = 'Chủ đề';
$string['story_help'] = 'Chủ đề của câu hỏi của bạn. Bạn cũng có thể sao chép/dán toàn bộ bài viết, ví dụ từ wikipedia.';
$string['numofquestions'] = 'Số câu hỏi cần tạo';
$string['generate'] = 'Tạo câu hỏi';
$string['backtocourse'] = 'Quay lại khóa học';

// Results.
$string['gotoquestionbank'] = 'Đi đến ngân hàng câu hỏi';
$string['generatemore'] = 'Tạo thêm câu hỏi';
$string['createdquestionwithid'] = 'Đã tạo câu hỏi với id ';
$string['tasksuccess'] = 'Nhiệm vụ tạo câu hỏi đã được tạo thành công';
$string['generating'] = 'Đang tạo câu hỏi của bạn... (Bạn có thể rời khỏi trang này một cách an toàn và kiểm tra lại sau trong ngân hàng câu hỏi)';
$string['generationfailed'] = 'Việc tạo câu hỏi đã thất bại sau {$a} lần thử';
$string['generationtries'] = 'Số lần thử đã gửi đến YeScale: <b>{$a}</b>';
$string['outof'] = 'trên';
$string['preview'] = 'Xem trước câu hỏi trong tab mới';
$string['cronoverdue'] = 'Nhiệm vụ cron có vẻ như không chạy,
việc tạo câu hỏi dựa vào AdHoc Tasks được tạo bởi nhiệm vụ cron, vui lòng kiểm tra cài đặt cron của bạn.
Xem <a href="https://docs.moodle.org/en/Cron#Setting_up_cron_on_your_system">
https://docs.moodle.org/en/Cron#Setting_up_cron_on_your_system
</a> để biết thêm thông tin.';
$string['createdquestionsuccess'] = 'Đã tạo câu hỏi thành công';
$string['createdquestionssuccess'] = 'Đã tạo các câu hỏi thành công';
$string['errornotcreated'] = 'Lỗi: câu hỏi chưa được tạo';

// Preset defaults.
$string['presetnamedefault1'] = "Câu hỏi trắc nghiệm (Tiếng Việt)";
$string['presetprimerdefault1'] = "Bạn là một trợ lý giáo viên hữu ích tạo câu hỏi trắc nghiệm dựa trên các chủ đề do người dùng cung cấp.";
$string['presetinstructionsdefault1'] = "Vui lòng viết một câu hỏi trắc nghiệm bằng tiếng Việt theo định dạng GIFT về một chủ đề mà tôi sẽ chỉ định riêng cho bạn. Định dạng GIFT sử dụng dấu bằng cho câu trả lời đúng và dấu ngã cho câu trả lời sai ở đầu các câu trả lời. Ví dụ: '::Tiêu đề câu hỏi:: Nội dung câu hỏi { =câu trả lời đúng#phản hồi ~câu trả lời sai#phản hồi ~câu trả lời sai#phản hồi ~câu trả lời sai#phản hồi }' Vui lòng có một dòng trống giữa các câu hỏi. Không bao gồm tiêu đề câu hỏi ở đầu nội dung câu hỏi.";
$string['presetexampledefault1'] = "::Tính chỉ mục và tính biểu tượng 1:: Hãy tưởng tượng bạn đang đứng trên bờ hồ. Gió nổi lên, tạo ra sóng trên mặt hồ. Theo C.S. Peirce, sóng biểu thị gió theo cách nào? { =Mối quan hệ vừa có tính chỉ mục vừa có tính biểu tượng.#Đúng. Có một kết nối về tính liền kề không gian-thời gian giữa gió và sóng, đây là đặc điểm quyết định của tính chỉ mục. Cũng có sự tương đồng hình thức giữa hướng gió và hướng của sóng, đây là đặc điểm quyết định của tính biểu tượng. ~Mối quan hệ có tính chỉ mục.#Gần đúng. Có một kết nối về tính liền kề không gian-thời gian giữa gió và sóng, theo Peirce, đây là đặc điểm quyết định của tính chỉ mục. Tuy nhiên, cũng có ý nghĩa bổ sung diễn ra. ~Không có hiện tượng ký hiệu nào giữa gió và sóng, chúng là hai ký hiệu riêng biệt.#Sai. Chuyển động của sóng được quyết định bởi gió. ~Mối quan hệ giữa gió và sóng mang tính biểu tượng.#Sai. Chuyển động của sóng không phải là tùy ý, điều này sẽ xảy ra nếu mối quan hệ mang tính biểu tượng. }";
$string['presetnamedefault2'] = '';
$string['presetprimerdefault2'] = '';
$string['presetinstructionsdefault2'] = '';
$string['presetexampledefault2'] = '';
$string['presetnamedefault3'] = '';
$string['presetprimerdefault3'] = '';
$string['presetinstructionsdefault3'] = '';
$string['presetexampledefault3'] = '';
$string['presetnamedefault4'] = '';
$string['presetprimerdefault4'] = '';
$string['presetinstructionsdefault4'] = '';
$string['presetexampledefault4'] = '';
$string['presetnamedefault5'] = '';
$string['presetprimerdefault5'] = '';
$string['presetinstructionsdefault5'] = '';
$string['presetexampledefault5'] = '';
$string['presetnamedefault6'] = '';
$string['presetprimerdefault6'] = '';
$string['presetinstructionsdefault6'] = '';
$string['presetexampledefault6'] = '';
$string['presetnamedefault7'] = '';
$string['presetprimerdefault7'] = '';
$string['presetinstructionsdefault7'] = '';
$string['presetexampledefault7'] = '';
$string['presetnamedefault8'] = '';
$string['presetprimerdefault8'] = '';
$string['presetinstructionsdefault8'] = '';
$string['presetexampledefault8'] = '';
$string['presetnamedefault9'] = '';
$string['presetprimerdefault9'] = '';
$string['presetinstructionsdefault9'] = '';
$string['presetexampledefault9'] = '';
$string['presetnamedefault10'] = '';
$string['presetprimerdefault10'] = '';
$string['presetinstructionsdefault10'] = '';
$string['presetexampledefault10'] = ''; 