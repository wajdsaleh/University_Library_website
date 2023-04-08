create or REPLACE trigger trg_Alerts
before insert on Members 
REFERENCING old as old new as new
for each row
begin
if :new.alerts  > 3  then 
 :new.account_state := 'blocked';
end if;
end ;



create or REPLACE trigger trg_Fine
before insert on Borrowers 
REFERENCING old as old new as new
for each row
begin
if :old.Retreving_date > sysdate then
 :new.Fine := 'T';
end if;
end;