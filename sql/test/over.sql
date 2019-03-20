select 
id,
detail,
ROW_NUMBER() OVER(PARTITION BY id) as detail_number,
from
dtb_main
