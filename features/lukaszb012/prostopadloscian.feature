Feature: Obliczenia

  Scenario: Prostopadłościan
    Given I am on homepage
    When I follow "Prostopadłościan by LukaszB012"
    And I fill in "A" with "3"
    And I fill in "B" with "2"
    And I fill in "H" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 18"
