# Please write a DELETE statement and DO NOT write a SELECT statement.
# Write your MySQL query statement below

Delete p1 from Person as p1
inner join Person as p2
where p1.id > p2.id and p1.email = p2.email