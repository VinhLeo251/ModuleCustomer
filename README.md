# Custom_Module
I. Các bước pull code và chạy module

  - B1: Pull source code về project của bạn
  - B2: Mở terminal, chạy : cd /var/www/html/tên project/app/code 
  - B3: Chạy trong terminal: git clone https://github.com/VinhLeo251/ModuleCustomer.git
  - B4: chạy các lệnh trong terminal: bin/magento setup:upgrade && bin/magento setup:di:compile && bin/magento c:c && bin/magento s:s:d -f
  - B5: Hoàn thành.

II. Đề bài custom module
1. Module Attribute Customer
  Add the following fields for customers to complete when registering:</br>
  1.1. Organization Name (Textfield) </br>
  1.2. Contact Phone Number including country code (Textfield) </br>
  1.3. Please select your Company Type (Dropdown) </br>
   - CBD Manufacturer </br>
   - CBD Brand and Marketing company </br>
   - CBD Extractor </br>
   - Other </br>
   - If Other - please specify (Should 1. Organization Name only appear if "Oth er" is selected )</br>
  chỉ hiển thị khi Attribute Organization Name khi Company Type = other
  

2. Module Custom Checkout
   - Thêm một step trang checkout để khách hàng nhập thông tin ngày giao hàng và note</br>
   - Ngày giao hàng requireAdmin có thể xem + sửa thông tin ngày giao hàng và note ở backend ( Order detail )</br>

3. Module Sale Agent</br> 
  
    3.1. Introduction</br>
  
         - Implement a system consisting of Sales Agent (SA).</br> 
         - SA is a customer as well. </br>
         - SA will be assigned with products, and receive commission when customer buy their product.</br> 

    3.2. New Attributes </br>
   
         - Customer: is_sales_agent (boolean) </br>
         - Product: sale_agent_id, commission_type (fixed/percent), commission_value </br>

    3.3. Tables </br>

         - entity_id </br>
         - order_id </br>
         -  order_item_id </br>
         -  order_item_sku </br>
         -  order_item_price </br>
         -  commision_percent </br>
         -  commission_value </br>
        Be sure to apply an appropriate data type to each field. ( You can edit the table structure if you feel necessary )

    3.4. Features </br>
   
        a. Backend: </br>
        
           ○ Admin will be able to assign SA, commission type, value to each product. </br>
           ○ Commission report. Only do 1 out of 2 below:</br>
             ● Acc ording to Product, filterable by SKU with Ajax load. </br>
             ● According to SA, filterable by Email with Ajax load. </br>
             
        b. Frontend: </br>
        
           ○ When customer successfully place an order, SA will immediately receive commission. </br>
           ○ When a SA logged in to his account, he can preview (somew here in My Account) all product assigned to him 
           (you should display this with a table). </br>
             ● Product name, sku, url to the product</br>
             ● Commission type, commission value.. </br>
       c. Global: </br>
       
           ○ SA's first name will be displayed as "Sales Agent: <firstname>" instead of "<firstnam e>" on all pages of the website
