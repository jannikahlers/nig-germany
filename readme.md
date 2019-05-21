# Nig Germany Forum
This is a small project I did with a friend of mine in our computer science class back in 2016.
It's not very good, but we were very proud of it back then.

## Usage
This page needs a working PHP installation (idk which version).
You will also need a (my)sql database with the following tables:

**Account**(_username_, email, password)

**Post**(_ID_, ↑username, ↑thread_id, content, date) (let mysql generate id and date)

**Thread**(_ID_, topic, ↑username, date) (let mysql generate id and date)

**News**(_ID_, content, date) (let mysql generate id)
