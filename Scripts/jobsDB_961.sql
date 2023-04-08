BEGIN
DBMS_SCHEDULER.create_job (
job_name => 'Activity_job',
job_type => 'PLSQL_BLOCK',
job_action => 'declare 
v_count Number :=0;
begin
select count (*) into v_count from Members;?
update Members 
set account_state = "inactive";commit;END;',
start_date => TO_TIMESTAMP_TZ('2022-10-26 02:35:17.000000000 ASIA/RIYADH','YYYY-MM-DD HH24:MI:SS.FF TZR'),
repeat_interval => 'freq=daily; byday=MON,TUE,WED,THU,SUN',
end_date => TO_TIMESTAMP_TZ('2023-01-11 02:35:18.000000000 ASIA/RIYADH','YYYY-MM-DD HH24:MI:SS.FF TZR'),
enabled => true,
comments => 'my first job');
END;