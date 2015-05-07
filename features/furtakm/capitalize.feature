Feature: Dużee

  Scenario: Dużee
    Given I am on homepage
    When I follow "Dużee by furtakm"
    And I fill in "Podaj napis" with "Ala ma Kota"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: ala ma kota"