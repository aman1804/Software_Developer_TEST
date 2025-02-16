-- Problem: Query on millions of records is slow due to lack of indexing.

-- Solution: Add an index on 'status' and 'created_at' columns to optimize the query
CREATE INDEX idx_status_created_at ON orders (status, created_at DESC);
