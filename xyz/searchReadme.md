## changes to be taken care of
- jquery should be already enabled ( remove defer tag)
- add internal css  ( /* search body css */ )
- add this div in last of header (within)
```
 <div class="search-result-container">
           // --
<div>
```
- add script  /*script for search - requires jquery*/
- **Note** : Change server `/search.php`

- Recommended changes - position of 2nd search box( for small screen), can be made absolute. ( right now it pushes down contents, which can be avoided)
