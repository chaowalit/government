<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <!-- Total Registered User :  Total Registered User With Photo : <h1>Data User</h1> -->
    <table class="table table-striped table-bordered" style="text-align: center;">
        <thead>
            <!-- <tr>
                <th rowspan="2" align="center" width="6">ลำดับ</th>
                <th rowspan="2" align="center" width="35">รายการ</th>
                <th rowspan="2" align="center" width="10">ราคา MPL</th>
                <th rowspan="2" align="center" width="8">หน่วย</th>
                <th colspan="3" align="center">จำนวนคอร์ส</th>
                <th colspan="6" align="center">ยอดเงิน (บาท)</th>
            </tr> -->
            <tr>
                <th width="100"></th>
                <th align="center" width="10">จำนวน</th>
                <th align="center" width="10">คิดเป็น(%)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align="left">1. เพศ</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชาย</td>
                <td align="center"><?php echo $summary_survey['sex']['male']; ?></td>
                <td align="center"><?php echo $summary_survey['sex']['male']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หญิง</td>
                <td align="center"><?php echo $summary_survey['sex']['female']; ?></td>
                <td align="center"><?php echo $summary_survey['sex']['female']/$summary_survey['total']*100; ?>%</td>
            </tr>

            <tr>
                <td align="left">2. อายุ</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อายุต่ำ20ปี</td>
                <td align="center"><?php echo $summary_survey['age']['<20']; ?></td>
                <td align="center"><?php echo $summary_survey['age']['<20']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อายุต่ำ20-30</td>
                <td align="center"><?php echo $summary_survey['age']['20-30']; ?></td>
                <td align="center"><?php echo $summary_survey['age']['20-30']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อายุต่ำ30-40</td>
                <td align="center"><?php echo $summary_survey['age']['30-40']; ?></td>
                <td align="center"><?php echo $summary_survey['age']['30-40']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อายุต่ำ40ปีขึ้นไป</td>
                <td align="center"><?php echo $summary_survey['age']['40>']; ?></td>
                <td align="center"><?php echo $summary_survey['age']['40>']/$summary_survey['total']*100; ?>%</td>
            </tr>

            <tr>
                <td align="left">3. อาชีพของผู้ขอรับบริการข้อมูล</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้าราชการ</td>
                <td align="center"><?php echo $summary_survey['career']['career_1']; ?></td>
                <td align="center"><?php echo $summary_survey['career']['career_1']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รัฐวิสาหกิจ</td>
                <td align="center"><?php echo $summary_survey['career']['career_2']; ?></td>
                <td align="center"><?php echo $summary_survey['career']['career_2']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้ประกอบการเอกชน</td>
                <td align="center"><?php echo $summary_survey['career']['career_3']; ?></td>
                <td align="center"><?php echo $summary_survey['career']['career_3']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประชาชนทัวไป</td>
                <td align="center"><?php echo $summary_survey['career']['career_4']; ?></td>
                <td align="center"><?php echo $summary_survey['career']['career_4']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อื่นๆ</td>
                <td align="center"><?php echo $summary_survey['career']['career_5']; ?></td>
                <td align="center"><?php echo $summary_survey['career']['career_5']/$summary_survey['total']*100; ?>%</td>
            </tr>

            <tr>
                <td align="left">4. ข้อมูลข่าวสารที่ขอดู/ขอรับบริการ</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แผ่นพับแนะนำ<?php echo $contact_us[0]->location_name; ?>(โครงสร้างและการจัดการองค์กรในการดำเนินงาน สรุปอำนาจหน้าที่ที่สำคัญและวิธีการดำเนินงานและสถานที่ติดต่อเพื่อขอรับข้อมูลข่าวสารหรือคำแนะนำในการติดต่อกลับกับหน่วยงานรัฐ)</td>
                <td align="center"><?php echo $summary_survey['data_info_do']['data_info_do_1']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_do']['data_info_do_1']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กฏ มติคณะรัฐมนตรี ข้อบังคับ คำสั่ง หนังสือเวียน ระเบียบ แบบแผน นโยบายหรือการตีความ ทั้งนี้เฉพาะที่จัดให้มีขึ้นโดยมีสภาพอย่างกฏ เพื่อให้มีผลเป็นการทั้วไปต่อภาคเอกชน</td>
                <td align="center"><?php echo $summary_survey['data_info_do']['data_info_do_2']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_do']['data_info_do_2']/$summary_survey['total']*100; ?>%</td>
            </tr>

            <tr>
                <td align="left">5. ข้อมูลข่าวสารตามมาตรา9 แห่งกฏหมายข้อมุลข่าวสารราชการ</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผลการพิจารณาหรือคำวินิจฉัยที่มีผลโดยตรงต่อเอกชน รวมทั้งความเห็นแย้งและคำสั่งที่เกี่ยวข้องในการพิจารณาวินิจฉัยดังกล่าว</td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_1']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_1']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นโยบายและการตีความ</td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_2']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_2']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แผนงาน โครงการ และงบประมาณรายจ่ายประจำปีของปีที่กำลังดำเนินการ</td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_3']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_3']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คู่มือหรือคำสั่งเกี่ยวกับวิธีปฏิบัติงานของเจ้าหน้าที่ของรัฐซึ่งมีผลกระทบถึงสิทธิ หน้าที่ของเอกชน</td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_4']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_4']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สิ่งพิมพ์ที่ได้มีการอ้างถึงในราชกิจจานุเบกษา</td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_5']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_5']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สัญญาสัมปทาน สัญญาที่มีลักษณะเป็นการผูกขาดตัดตอน หรือสัญญาร่วมทุนกับเอกชนในการจัดทำบริการสาธารณะ</td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_6']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_6']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มติคณะรัฐมนตรี หรือมติคณะกรรมการที่แต่งตั้งโดยกฎหมายหรือโดยมติคณะรัฐมนตรี</td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_7']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_7']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประกาศประกวดราคา ประกาศสอบราคา และสรุปผลการพิจารณาการจัดซื้อจัดจ้าง</td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_8']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_at9']['data_info_at9_8']/$summary_survey['total']*100; ?>%</td>
            </tr>

            <tr>
                <td align="left">6. ข้อมูลข่าวสารอื่นเป็นการทั่วไป</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แผ่นพับกระบวนงาน</td>
                <td align="center"><?php echo $summary_survey['data_info_other']['data_info_other_1']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_other']['data_info_other_1']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รายงานวิชาการ</td>
                <td align="center"><?php echo $summary_survey['data_info_other']['data_info_other_2']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_other']['data_info_other_2']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เอกสารเผยแพร่</td>
                <td align="center"><?php echo $summary_survey['data_info_other']['data_info_other_3']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_other']['data_info_other_3']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปสเตอร์</td>
                <td align="center"><?php echo $summary_survey['data_info_other']['data_info_other_4']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_other']['data_info_other_4']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จุลสาร</td>
                <td align="center"><?php echo $summary_survey['data_info_other']['data_info_other_5']; ?></td>
                <td align="center"><?php echo $summary_survey['data_info_other']['data_info_other_5']/$summary_survey['total']*100; ?>%</td>
            </tr>

            <tr>
                <td align="left">7. ความสะดวกทั่วไปในการค้นหาข้อมุล/เข้าถึงข้อมูล</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดีมาก</td>
                <td align="center"><?php echo $summary_survey['easy_data']['_5']; ?></td>
                <td align="center"><?php echo $summary_survey['easy_data']['_5']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดี</td>
                <td align="center"><?php echo $summary_survey['easy_data']['_4']; ?></td>
                <td align="center"><?php echo $summary_survey['easy_data']['_4']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปานกลาง</td>
                <td align="center"><?php echo $summary_survey['easy_data']['_3']; ?></td>
                <td align="center"><?php echo $summary_survey['easy_data']['_3']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้อย</td>
                <td align="center"><?php echo $summary_survey['easy_data']['_2']; ?></td>
                <td align="center"><?php echo $summary_survey['easy_data']['_2']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ควรปรับปรุง</td>
                <td align="center"><?php echo $summary_survey['easy_data']['_1']; ?></td>
                <td align="center"><?php echo $summary_survey['easy_data']['_1']/$summary_survey['total']*100; ?>%</td>
            </tr>

            <tr>
                <td align="left">8. ข้อมูลมีความถูกต้องและเป็นปัจจุบัน</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดีมาก</td>
                <td align="center"><?php echo $summary_survey['correct_data']['_5']; ?></td>
                <td align="center"><?php echo $summary_survey['correct_data']['_5']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดี</td>
                <td align="center"><?php echo $summary_survey['correct_data']['_4']; ?></td>
                <td align="center"><?php echo $summary_survey['correct_data']['_4']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปานกลาง</td>
                <td align="center"><?php echo $summary_survey['correct_data']['_3']; ?></td>
                <td align="center"><?php echo $summary_survey['correct_data']['_3']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้อย</td>
                <td align="center"><?php echo $summary_survey['correct_data']['_2']; ?></td>
                <td align="center"><?php echo $summary_survey['correct_data']['_2']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ควรปรับปรุง</td>
                <td align="center"><?php echo $summary_survey['correct_data']['_1']; ?></td>
                <td align="center"><?php echo $summary_survey['correct_data']['_1']/$summary_survey['total']*100; ?>%</td>
            </tr>

            <tr>
                <td align="left">9. ข้อมูลที่ได้รับนำไปใช้อย่างมีประสิทธิภาพ</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดีมาก</td>
                <td align="center"><?php echo $summary_survey['use_data']['_5']; ?></td>
                <td align="center"><?php echo $summary_survey['use_data']['_5']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดี</td>
                <td align="center"><?php echo $summary_survey['use_data']['_4']; ?></td>
                <td align="center"><?php echo $summary_survey['use_data']['_4']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปานกลาง</td>
                <td align="center"><?php echo $summary_survey['use_data']['_3']; ?></td>
                <td align="center"><?php echo $summary_survey['use_data']['_3']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้อย</td>
                <td align="center"><?php echo $summary_survey['use_data']['_2']; ?></td>
                <td align="center"><?php echo $summary_survey['use_data']['_2']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ควรปรับปรุง</td>
                <td align="center"><?php echo $summary_survey['use_data']['_1']; ?></td>
                <td align="center"><?php echo $summary_survey['use_data']['_1']/$summary_survey['total']*100; ?>%</td>
            </tr>

            <tr>
                <td align="left">10. การให้บริการของเจ้าหน้าที่(ความกระตืรือร้น สุภาพ อ่อนโยน การยิ้มแย้มแจ่มใส และการช่วยเหลือในการค้นหาข้อมูล)</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดีมาก</td>
                <td align="center"><?php echo $summary_survey['people_service']['_5']; ?></td>
                <td align="center"><?php echo $summary_survey['people_service']['_5']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดี</td>
                <td align="center"><?php echo $summary_survey['people_service']['_4']; ?></td>
                <td align="center"><?php echo $summary_survey['people_service']['_4']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปานกลาง</td>
                <td align="center"><?php echo $summary_survey['people_service']['_3']; ?></td>
                <td align="center"><?php echo $summary_survey['people_service']['_3']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้อย</td>
                <td align="center"><?php echo $summary_survey['people_service']['_2']; ?></td>
                <td align="center"><?php echo $summary_survey['people_service']['_2']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ควรปรับปรุง</td>
                <td align="center"><?php echo $summary_survey['people_service']['_1']; ?></td>
                <td align="center"><?php echo $summary_survey['people_service']['_1']/$summary_survey['total']*100; ?>%</td>
            </tr>

            <tr>
                <td align="left">11. ความสะดวกสบาย ความสะอาด และความสวยงานของสถานที่ที่ให้บริการข้อมุล</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดีมาก</td>
                <td align="center"><?php echo $summary_survey['location_easy_use']['_5']; ?></td>
                <td align="center"><?php echo $summary_survey['location_easy_use']['_5']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดี</td>
                <td align="center"><?php echo $summary_survey['location_easy_use']['_4']; ?></td>
                <td align="center"><?php echo $summary_survey['location_easy_use']['_4']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปานกลาง</td>
                <td align="center"><?php echo $summary_survey['location_easy_use']['_3']; ?></td>
                <td align="center"><?php echo $summary_survey['location_easy_use']['_3']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้อย</td>
                <td align="center"><?php echo $summary_survey['location_easy_use']['_2']; ?></td>
                <td align="center"><?php echo $summary_survey['location_easy_use']['_2']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ควรปรับปรุง</td>
                <td align="center"><?php echo $summary_survey['location_easy_use']['_1']; ?></td>
                <td align="center"><?php echo $summary_survey['location_easy_use']['_1']/$summary_survey['total']*100; ?>%</td>
            </tr>

            <tr>
                <td align="left">12. ภาพรวมต่อให้บริการข้อมูลของการให้บริการข้อมูล</td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดีมาก</td>
                <td align="center"><?php echo $summary_survey['overview_data']['_5']; ?></td>
                <td align="center"><?php echo $summary_survey['overview_data']['_5']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดี</td>
                <td align="center"><?php echo $summary_survey['overview_data']['_4']; ?></td>
                <td align="center"><?php echo $summary_survey['overview_data']['_4']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปานกลาง</td>
                <td align="center"><?php echo $summary_survey['overview_data']['_3']; ?></td>
                <td align="center"><?php echo $summary_survey['overview_data']['_3']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้อย</td>
                <td align="center"><?php echo $summary_survey['overview_data']['_2']; ?></td>
                <td align="center"><?php echo $summary_survey['overview_data']['_2']/$summary_survey['total']*100; ?>%</td>
            </tr>
            <tr>
                <td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ควรปรับปรุง</td>
                <td align="center"><?php echo $summary_survey['overview_data']['_1']; ?></td>
                <td align="center"><?php echo $summary_survey['overview_data']['_1']/$summary_survey['total']*100; ?>%</td>
            </tr>
        </tbody>
    </table>
</body>
</html>