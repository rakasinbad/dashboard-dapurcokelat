-- JABO
SELECT DATE(created) AS tgl_order, DATE(deldate) AS tgl_pickup, kode, nama, SUM(qty) AS total_order 
    FROM master.`orderdlv` 
    INNER JOIN master.`orderdlv_detail` ON master.`orderdlv`.`kodeorder` = orderdlv_detail.`idorder`
    WHERE namakasir !='' 
            and orderdlv.status !='0'
            and kode_promo in ('DCI25-CC','DCI25','DCI25') 
            AND outletpengirim in ('AD','AS','HI','KG','MT','TB','TP','GV','CK','GS','PG','HO','DT','TR','KP','PT','JW','PL','KD','CP','JG','RM','VB','AP','GN','PN','CI','DK','TM','TG','BB','GW','JU','BK','DG','SB','PU','TN','CH','BR','PE','DA','SC','BE','KC','JB','DB','BU','TK','PS','LB','CD','GY','GO','BO','B2B','ME','ATMK','AG','MG','KW','ST','SY','TU','GM','MTH','SRT','WTC','PM','GRR','OT')
        AND outletpengirim NOT IN ('XX','XB')
        AND DATE(created) BETWEEN '2026-05-07' AND '2026-05-31'
    GROUP BY  kode ORDER BY tgl_order, nama ASC


-- JATIM
SELECT DATE(created) AS tgl_order, DATE(deldate) AS tgl_pickup, kode, nama, SUM(qty) AS total_order 
                FROM master.`orderdlv` 
                INNER JOIN master.`orderdlv_detail` ON master.`orderdlv`.`kodeorder` = orderdlv_detail.`idorder`
                WHERE namakasir !='' 
                        and orderdlv.status !='0'
                        and kode_promo in ('DCI25-CC','DCI25','DCI25') 
                        AND outletpengirim in ('BL','JS','GF','ML','MS','BI','KT','GR','RK','MN','BA','MJ','TD','DY','TS','DU','RN','MD','TL','SMG','JGJ','XY','PDR','KUR','PRT','B2BS')
                    AND outletpengirim NOT IN ('XX','XB')
                    AND DATE(created) BETWEEN '2026-05-07' AND '2026-05-31'
                GROUP BY kode ORDER BY tgl_order, nama ASC