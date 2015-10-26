<% for (var i = 0; i < episodes.length; i++) { %>
<div class="dwt-duration dwt-creature<%= episodes[i].xcls %> <%= color %>" data-id="<%= id %>" data-creature="<%= episodes[i].number %>" title="<%= name %>"  style="<%= getStyle(episodes[i]) %>">
    <div class="dwt-label dwt-creature-name <%= color %> ttip_t" title="<%= name %>"><%= name %></div>
</div>
<% } %>