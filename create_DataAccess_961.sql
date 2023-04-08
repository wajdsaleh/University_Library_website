create user librarian
IDENTIFIED by 1234;

create role BookRole
not IDENTIFIED ;


grant select on vBookStatus to BookRole;

grant BookRole to librarian;