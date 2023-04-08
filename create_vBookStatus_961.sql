create view vBookStatus as 
select ISSN,title,Is_it_borrowed as book_state , author_name
from Book , Authors ,PublisherAuthor
where PublisherAuthor.PA_ID = Book.PA_ID and PublisherAuthor.Author_id = Authors.Author_id;