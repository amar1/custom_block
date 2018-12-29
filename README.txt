Custom Block
==========
Custom Block module contains article type node.

1. Show only first 5 nodes based on rules
2. Block shows content only of type article
3. Block is displayed only on nodes of type article

Rules:
  1. Display nodes in same category by same author first
  2. Display nodes in same category by different author next
  3. Display nodes in different category by same author next
  4. Display nodes in different category by different author next

4. Sort by title asc, created desc within each rule (So if there are 3 content for rule 1, these
3 should be sorted by title, created and then next 2 should be again sorted based the
group they belong to)

5. Block result should never contain current node

Reference Url
======================
-
