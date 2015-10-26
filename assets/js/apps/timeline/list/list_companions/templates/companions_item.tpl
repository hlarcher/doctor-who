<% for (var i = 0; i < episodes.length; i++) { %>
<div class="dwt-duration dwt-companion<%= episodes[i].xcls %> <%= color %>" data-id="<%= id %>" data-companion="<%= episodes[i].number %>" title="<%= fname %>" style="<%= getStyle(episodes[i]) %>">
    <div class="dwt-label dwt-companion-name <%= color %> ttip_t" title="<%= fname %>"><%= name %></div>
</div>
<% } %>